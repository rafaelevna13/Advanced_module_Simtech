{* {"test"|fn_print_die} *}
{if $departments}
    {script src="js/tygh/exceptions.js"}
    
{* проверка на пагинацию *}
    {if !$no_pagination}     
        {include file="common/pagination.tpl"}
    {/if}

{* разбиение на коллонки *}
    {if !$show_empty}
        {split data=$departments size=$columns|default:"2" assign="splitted_departments"}
    {else}
        {split data=$departments size=$columns|default:"2" assign="splitted_departments" skip_complete=true}
    {/if}
    {math equation="100 / x" x=$columns|default:"2" assign="cell_width"}

    <div class="grid-list">
        {strip}
            {foreach from=$splitted_departments item="sdepartments" }
                {foreach from=$sdepartments item="department"}
                    <div class="ty-column{$columns}">
                        {if $department}
                            {assign var="obj_id" value=$department.department_id}
                            {assign var="obj_id_prefix" value="`$obj_prefix``$department.department_id`"}
                          
                            <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                <div class="ty-grid-list__image">
                                    <a href="{"departments.view_info?department_id={$department.department_id}"|fn_url}">
                                        {include 
                                            file="common/image.tpl" 
                                            lazy_load=false 
                                            images=$department.main_pair.icon|default:$department.main_pair.detailed
                                            image_width=$settings.Thumbnails.product_lists_thumbnail_width
                                            image_height=$settings.Thumbnails.product_lists_thumbnail_height
                                        }
                                    </a>
                                </div>
                                <div class="ty-grid-list__item-name">
                                    <bdi>
                                        <a href="{"departments.view_info?department_id={$department.department_id}"|fn_url}" class="department-title" title="{$department.department}">{$department.department}</a>
                                    </bdi>
                                </div>
                                <div class="ty-grid-list__admin">
                                    {$department.admin_data.firstname}&nbsp;
                                    {$department.admin_data.lastname}
                                </div>
                            </div>
                        {/if}
                    </div>
                {/foreach}
            {/foreach}
        {/strip}
    </div>

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}
    {else}
        {include file="common/no_items.tpl"
            text_no_found=__("departments.departments_not_found")
        }
    {/if}

{capture name="mainbox_title"}{$title}{/capture}
