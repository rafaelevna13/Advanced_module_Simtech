<?php

use Illuminate\Support\Arr;
use Tygh\Registry;
use Tygh\Languages\Languages;
use Tygh\BlockManager\Block;
use Tygh\Tools\SecurityHelper;


if (!defined('BOOTSTRAP')) { die('Access denied'); }


function fn_get_department_data($department_id = 0, $lang_code = CART_LANGUAGE)
{
    $department = [];
    if (!empty($department_id)) {
        list($departments) = fn_get_departments([
            'department_id' => $department_id
            ],1, $lang_code);
        if (!empty($departments)) { 
            $department = reset($departments);
            $department['employee_ids'] = fn_get_department_links ($department['department_id']);
        }
    }
    return $department;
}


function fn_get_departments($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)
    {
        // Set default values to input params
        $default_params = array(
            'page' => 1,
            'items_per_page' => $items_per_page
        );
    
        $params = array_merge($default_params, $params);
    
        if (AREA == 'C') {
            $params['status'] = 'A';
        }
    
        $sortings = array(
            'position' => '?:departments.position',
            'timestamp' => '?:departments.timestamp',
            'name' => '?:department_descriptions.department',
            'status' => '?:departments.status',
        );
    
        $condition = $limit = $join = '';
    
        if (!empty($params['limit'])) {
            $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
        }
    
        $sorting = db_sort($params, $sortings, 'name', 'asc');
    
        if (!empty($params['item_ids'])) {
            $condition .= db_quote(' AND ?:departments.department_id IN (?n)', explode(',', $params['item_ids']));
        }

        if (!empty($params['department_id'])) {   //условия для создания condition
            $condition .= db_quote(' AND ?:departments.department_id = ?i', $params['department_id']);
        }

        if (!empty($params['admin_id'])) {  
            $condition .= db_quote(' AND ?:departments.admin_id = ?s', $params['admin_id']);
        }
    
        if (!empty($params['status'])) {
            $condition .= db_quote(' AND ?:departments.status = ?s', $params['status']);
        }
    
        //для sidebar
        if (!empty($params['name'])) {
            $condition .= db_quote(' AND ?:department_descriptions.department LIKE ?l', '%' . trim($params['name']) . '%');
        }
        
        $fields = array (     //для выдачи
            '?:departments.*',
            '?:department_descriptions.department',
            '?:department_descriptions.description',
        );
    
        $join .= db_quote(' LEFT JOIN ?:department_descriptions ON ?:department_descriptions.department_id = ?:departments.department_id AND ?:department_descriptions.lang_code = ?s', $lang_code);

//$params['total_items']  - запрос котороый получает общее кол-во элементов при выбранных параметров
//с помощью функции db_paginate - генерирует лимит
//если страничка 1 то с 1 элемента по n-ое. n-ое кол-во задается через $items_per_page и тд
        if (!empty($params['items_per_page'])) {
            $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:departments $join WHERE 1 $condition");
            $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
        }
    
        $departments = db_get_hash_array(
            "SELECT ?p FROM ?:departments " .
            $join .
            "WHERE 1 ?p ?p ?p",
            'department_id', implode(', ', $fields), $condition, $sorting, $limit
        );
    
        $department_image_ids = array_keys($departments);
        $images = fn_get_image_pairs($department_image_ids, 'department_logo', 'M', true, false, $lang_code); //получение картинки

        foreach ($departments as $department_id => $department) {
           $departments[$department_id]['main_pair'] = !empty($images[$department_id]) ? reset($images[$department_id]) : array();
        } 
        //функция возвращает картинки по объектам()  //Get main image pair

        if (!empty($departments)) {
            foreach ($departments as &$department) {
                $department['admin_data'] = !empty($department['admin_id']) ? fn_get_user_short_info($department['admin_id']) : [];
                $department['employee_ids'] = fn_get_employee_ids($department['department_id']);
                    if (AREA == 'C') {
                    $department['employees'] = [];
                    foreach ($department['employee_ids'] as $employee_id) {
                        $department['employees'][] = fn_get_user_short_info($employee_id);
                    }
                }
            }
        }

        return array($departments, $params);
    }

function fn_update_department($data, $department_id, $lang_code = DESCR_SL)
{
    
    $data['upd_timestamp'] = TIME;

    $employee_ids = explode(",", $data["employee_ids"]);
    $new_employees = [];

    if (!empty($department_id)) {
        db_query("UPDATE ?:departments SET ?u WHERE department_id = ?i", $data, $department_id);
        db_query("UPDATE ?:department_descriptions SET ?u WHERE department_id = ?i AND lang_code = ?s", $data, $department_id, $lang_code);

        db_query ("DELETE FROM ?:department_links WHERE department_id = ?i AND user_id NOT IN (?n)", $department_id, $employee_ids);
        $exist_employee_ids = fn_get_employee_ids($department_id);
        foreach ($employee_ids as $employee_id) {
            if (!in_array ($employee_id, $exist_employee_ids)){
                $new_employees[] = $employee_id;
            }
        }

    } else {
        $data['timestamp'] = TIME;
        $department_id = $data['department_id'] = db_replace_into('departments', $data); //если нет department_id - создается новый

        $new_employees = $employee_ids;

        //создание языковых переменных
        foreach (Languages::getAll() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:department_descriptions ?e", $data);
        }
    }

    // Update main image
    if (fn_departments_need_image_update()) {
        fn_attach_image_pairs('department', 'department_logo', $department_id, $lang_code);
    }
    
    fn_add_department_links($department_id, $new_employees);

    return $department_id;
}

/* Checks of request for need to update the department image.*/
function fn_departments_need_image_update()
{
    if (!empty($_REQUEST['file_departments_main_image_icon']) && is_array($_REQUEST['file_departments_main_image_icon'])) {
        $image_department = reset($_REQUEST['file_departments_main_image_icon']);

        if ($image_department == 'departments_main') {
            return false;
        }
    }

    return true;
}

/* удаление отдела и языкозависимых полей для этих отделов */
function fn_delete_department($department_id)
{
    if (!empty($department_id)) {
        $res = db_query("DELETE FROM ?:departments WHERE department_id = ?i", $department_id);
        db_query("DELETE FROM ?:department_descriptions WHERE department_id = ?i", $department_id);
        db_query("DELETE FROM ?:department_links WHERE user_id = 0 ");
        fn_delete_department_links($department_id);  /* для удаления отдела */
    }
}

function fn_get_department_links($department_id) 
{
    return !empty($department_id) ? db_get_fields("SELECT user_id FROM `?:department_links` WHERE `department_id` = ?i", $department_id) : [];
}

function fn_get_employee_ids($department_id)
{
    return array_keys(
        fn_get_employees($department_id), 
    );
}

function fn_get_employees($department_id)
{
    $condition = db_quote ("AND department_id = ?i", $department_id); //условие, что отделы только пользователя с нужным ID

    return db_get_hash_array( //второй аргумент(.user_id) принимает ключ, по которому будет строится массив
        "SELECT ?p FROM ?:department_links " .
        "WHERE 1 ?p",
        "user_id", "?:department_links.user_id", $condition
    );
}

function fn_delete_department_links($department_id)  //нужно при удалении всех links
{
    db_query("DELETE FROM ?:department_links WHERE department_id = ?i", $department_id);
}

function fn_add_department_links($department_id, $employee_ids) //для добавлении
{
    if(!empty($employee_ids)){
        foreach($employee_ids as $employee_id){
            db_query("REPLACE INTO ?:department_links ?e", [
                'user_id' => $employee_id,
                'department_id' => $department_id,
            ]);
        }
    }
}



/* чтобы не заниматься определением что мы добавили в отдел, а что удалили*/
// $employee_ids = !empty($data['employee_ids']) ? $data['employee_ids'] : [];
// fn_delete_department_links($department_id);
// fn_add_department_links($department_id, $employee_ids);
