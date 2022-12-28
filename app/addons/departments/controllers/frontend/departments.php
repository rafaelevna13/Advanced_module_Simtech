<?php

use Tygh\Registry;

if ($mode == 'view_all') {

    Tygh::$app['session']['continue_url'] = "departments.view_all";

    $params = $_REQUEST;  //определяем тот $params который будет из $_REQUEST

//$params['user_id'] -это пользователь из которого мы зашли
    $params['user_id'] =  Tygh::$app['session']['auth']['user_id'];

//$params-параметр для поиска, 
//Registry::get('settings.Appearance.products_per_page') - кол-во на страничке по умолчанию 
    list($departments, $search) = fn_get_departments($params, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);

//в сматре для отбражения 
    Tygh::$app['view']->assign('departments', $departments);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('columns', 3);

    fn_add_breadcrumb(__("departments.departments"));   // [/Breadcrumbs]

} elseif ($mode === 'view_info') {

    // будет добавлять id-шники (пытаться методом перебора подобрать отдел)
    $department_data = [];
    $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] :0;
    $department_data = fn_get_department_data($department_id, CART_LANGUAGE);
   
    if (empty($department_data)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    Tygh::$app['view']->assign('department_data', $department_data);

    fn_add_breadcrumb(__("departments.departments"), "?dispatch=departments.view_all");   // [/Breadcrumbs] 
    fn_add_breadcrumb(__("departments.info"));

    $params = $_REQUEST;  //получение params 
    $params['extend'] = ['description']; //добавление description
    $params['item_ids'] = !empty($_REQUEST['employee_ids']) ? implode(',', $department_data['employee_ids']) : -1;  
    // когда у отдела нет ни одного сотрудника 

    if ($items_per_page = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'items_per_page')) {
        $params['items_per_page'] = $items_per_page;
    }
    if ($sort_by = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_by')) {
        $params['sort_by'] = $sort_by;
    }
    if ($sort_order = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_order')) {
        $params['sort_order'] = $sort_order;
    }

    Tygh::$app['view']->assign('departments', $departments);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('selected_layout', $selected_layout);
}






//добавление в сессию params
//забираем дополнительно параметры и сессии(они записываются в сессию,чтобы при переходе на стр/другую категорию - выбралась сортировка)

//передать в парамс те айдишники сотрудников, которые выбраны в отделе
//для того чтобы показывались только те сотрудники которые присутствуют в данном отделе
    // list($departments, $search) = fn_get_departments($params, Registry::get('settings.Appearance.departments_per_page'));

// fn_gather_additional_products_data - выдает картинки у сотрудника и прочие 
    // fn_gather_additional_products_data($products, [
    //     'get_icon'      => true,
    //     'get_detailed'  => true,
    //     'get_options'   => true,
    //     'get_discounts' => true,
    //     'get_features'  => false
    // ]);

//переключатель layout
    // $selected_layout = fn_get_products_layout($_REQUEST);
    // $selected_layout = fn_get_departments_layout($_REQUEST);
