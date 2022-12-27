{* {"test"|fn_print_die} *}
<div id="departments{$block.block_id}">
    <div class="ty-feature">
        {if $department_data.main_pair}
        <div class="ty-feature__image">
            {include file="common/image.tpl" 
            images=$department_data.main_pair.icon|default:$department.main_pair.detailed 
            image_width=400 
            image_id=$departments.main_pair.image_id 
            }
        </div>
        {/if}
        <div class="ty-feature__description ty-wysiwyg-content">
            {$department_data.description nofilter}
        </div>
    </div>
    {if $department_data.employees}
        <h3>{__("departments.employees")}:</h3>
        <li>
            {foreach from=$department_data.employees item="employee"}
            <li>
                {$employee.firstname}
                {$employee.lastname}
                (<a href="mailto:{$employee.email}">{$employee.email}</a>)
            </li>
        {/foreach}
        </li>
    {else}
        <p class="ty-no-items">{__("no_departments")}</p>
    {/if}
</div><!--department_{$block.block_id}-->

{capture name="mainbox_title"}{$department_data.department nofilter}{/capture}


