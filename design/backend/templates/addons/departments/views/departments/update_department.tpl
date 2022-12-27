{if $department_data}
    {assign var="id" value=$department_data.department_id}
{else}
    {assign var="id" value=0}
{/if}


{capture name="mainbox"}

<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="departments_form" enctype="multipart/form-data">
    <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
    <input type="hidden" class="cm-no-hide-input" name="department_id" value="{$id}" />

        <div id="content_general">
            <div class="control-group">
                <label for="elm_department_name" class="control-label cm-required">{__("departments.name")}</label>
                <div class="controls">
                    <input type="text" name="department_data[department]" id="elm_department_name" value="{$department_data.department}" size="25" class="input-large" />
                </div>
            </div>
            <div class="control-group">
                <label for="elm_department_position" class="control-label">{__("departments.position")}:</label>
                <div class="controls">
                    <input type="text" name="department_data[position]" id="elm_department_position" value="{$department_data.position|default:"0"}" class="input-large">
                </div>
            </div>
            <div class="control-group" id="department_graphic">
                <label class="control-label">{__("departments.logo")}</label>
                <div class="controls">
                    {include file="common/attach_images.tpl"
                        image_name="department"
                        image_object_type="department_logo"
                        image_pair=$department_data.main_pair
                        image_object_id=$id
                        no_detailed=true
                        hide_titles=true
                    }
                </div>
            </div>
            <div class="control-group" id="department_text">
                <label class="control-label" for="elm_department_description">{__("departments.description")}:</label>
                <div class="controls">
                    <textarea id="elm_department_description" name="department_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large">{$department_data.description}</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_department_timestamp_{$id}">{__("")}</label>
                <div class="controls">
                    <input type="hidden" readonly="readonly" include file="common/calendar.tpl" date_id="elm_department_timestamp_`$id`" date_name="department_data[timestamp]">
                </div>
            </div>

            {include file="common/select_status.tpl" input_name="department_data[status]" id="elm_department_status" obj_id=$id obj=$department_data hidden=false}


            {* вызов руководителей *}
            {* exclude_user_types-исключить пользователей определённых типов *}
            <div class="control-group">
                <label class="control-label" for="elm_admin">{__("departments.admin")}</label>
                <div class="controls">
                    {include 
                    file="pickers/users/picker.tpl" 
                    data_id="elm_admin" 
                    input_name="department_data[admin_id]" 
                    item_ids=[$department.admin_id]
                    but_text=__("add_recipients_from_admin") 
                    but_meta="btn" 
                    placement="right"
                    view_mode="single_button"
                    display="radio"
                    extra_url="&pre_profiles_to_departments=&exclude_user_types[]=H&exclude_user_types[]=C"  
                    user_info=$admin_info
                    name_admin=$department.admin_data
                    }
                </div>
            </div>

             {* выбор пользователей *} 
             {* input_name - в каком поле будут приходить айдишники товаров и item_ids- откуда их брать*}
            <div class="control-group">
            <label class="control-label" for="elm_employees">{__("departments.employee")}</label>
                <div class="controls readonly">
                    {include 
                        file="pickers/users/picker.tpl" 
                        data_id="elm_employees" 
                        input_name="department_data[employee_ids]" 
                        item_ids=$department_data.employee_ids
                        but_text=__("add_recipients_from_employee") 
                        but_meta="btn" 
                        placement="left"
                        view_mode="mixed"
                        extra_url="&pre_profiles_to_departments=&exclude_user_types[]=A&exclude_user_types[]=V"  
                    }
                </div>
            </div>
        </div> <!--content_general-->

        {capture name="buttons"}
            {if !$id}
                {include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="departments_form" but_name="dispatch[departments.update_department]"}
            {else}
                {include file="buttons/save_cancel.tpl" but_name="dispatch[departments.update_department]" but_role="action" but_target_form="departments_form" hide_first_button=$hide_first_button hide_second_button=$hide_second_button save=$id}
                
                {capture name="tools_list"}
                    <li>{btn type="list" text=__("departments.delete") class="cm-confirm" href="departments.delete_department?department_id=`$id`" method="POST"}</li>
                {/capture}
                {dropdown content=$smarty.capture.tools_list}
            {/if}
        {/capture}
</form>
{/capture}


{if !$id}
    {$title ="{__("departments.add")}"}
{else}
    {$title_start = "{__("departments.change")}"}
    {$title_end = $department_data.department}
{/if}

{include 
    file="common/mainbox.tpl"
    title_start = $title_start
    title_end = $title_end
    title = $title
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
}
    {* select_languages=true *}