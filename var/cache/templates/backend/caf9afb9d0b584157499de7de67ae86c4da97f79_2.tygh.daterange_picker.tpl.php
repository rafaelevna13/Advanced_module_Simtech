<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:51
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/daterange_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394efff546e93_55965479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caf9afb9d0b584157499de7de67ae86c4da97f79' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/daterange_picker.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394efff546e93_55965479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','today','yesterday','this_month','last_month','this_year','last_year','custom_range','apply','clear','cancel','from','to'));
$_smarty_tpl->_assignInScope('enable_inputs', (($tmp = $_smarty_tpl->tpl_vars['enable_inputs']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first") {?>
    <?php $_smarty_tpl->_assignInScope('date_format', "%m/%d/%Y");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('date_format', "%d/%m/%Y");
}?>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="cm-date-range <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['data_url']->value) {?>data-ca-target-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['result_ids']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    data-ca-time-from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['start_date']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-time-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['end_date']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-date-format="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>MM/DD/YYYY<?php } else { ?>DD/MM/YYYY<?php }?>"
    data-ca-displayed-format="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>MMM DD, YYYY<?php } else { ?>DD MMM, YYYY<?php }?>"
    data-ca-use-predefined-periods="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['use_predefined_periods']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-show-ranges="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['show_ranges']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['always_show_calendars']->value !== null) {?>
        data-ca-always-show-calendars="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['always_show_calendars']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data_event']->value) {?>data-ca-event="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_event']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn-text">
        <span class="cm-date-range__selected-date">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </span>
        <b class="caret"></b>
    </a>

    <?php if ($_smarty_tpl->tpl_vars['enable_inputs']->value) {?>
        <input type="hidden"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_from"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name_from']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-date-range-picker="date-in"
        />

        <input type="hidden"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_to"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name_to']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-date-range-picker="date-out"
        />
    <?php }?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 class="cm-ajax_force">
    (function (_, $) {
        _.tr({
            default_lang: '<?php echo htmlspecialchars(strtr((defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            month_name_abr_1: '<?php echo strtr($_smarty_tpl->__("month_name_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_2: '<?php echo strtr($_smarty_tpl->__("month_name_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_3: '<?php echo strtr($_smarty_tpl->__("month_name_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_4: '<?php echo strtr($_smarty_tpl->__("month_name_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_5: '<?php echo strtr($_smarty_tpl->__("month_name_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_6: '<?php echo strtr($_smarty_tpl->__("month_name_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_7: '<?php echo strtr($_smarty_tpl->__("month_name_abr_7"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_8: '<?php echo strtr($_smarty_tpl->__("month_name_abr_8"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_9: '<?php echo strtr($_smarty_tpl->__("month_name_abr_9"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_10: '<?php echo strtr($_smarty_tpl->__("month_name_abr_10"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_11: '<?php echo strtr($_smarty_tpl->__("month_name_abr_11"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            month_name_abr_12: '<?php echo strtr($_smarty_tpl->__("month_name_abr_12"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_0: '<?php echo strtr($_smarty_tpl->__("weekday_abr_0"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_1: '<?php echo strtr($_smarty_tpl->__("weekday_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_2: '<?php echo strtr($_smarty_tpl->__("weekday_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_3: '<?php echo strtr($_smarty_tpl->__("weekday_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_4: '<?php echo strtr($_smarty_tpl->__("weekday_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_5: '<?php echo strtr($_smarty_tpl->__("weekday_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            weekday_abr_6: '<?php echo strtr($_smarty_tpl->__("weekday_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            today: '<?php echo strtr($_smarty_tpl->__("today"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            yesterday: '<?php echo strtr($_smarty_tpl->__("yesterday"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            this_month: '<?php echo strtr($_smarty_tpl->__("this_month"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            last_month: '<?php echo strtr($_smarty_tpl->__("last_month"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            this_year: '<?php echo strtr($_smarty_tpl->__("this_year"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            last_year: '<?php echo strtr($_smarty_tpl->__("last_year"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            custom_range: '<?php echo strtr($_smarty_tpl->__("custom_range"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            apply: '<?php echo strtr($_smarty_tpl->__("apply"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            clear: '<?php echo strtr($_smarty_tpl->__("clear"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            cancel: '<?php echo strtr($_smarty_tpl->__("cancel"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            from: '<?php echo strtr($_smarty_tpl->__("from"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            to: '<?php echo strtr($_smarty_tpl->__("to"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
        _.daterangepicker = {
        };
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/date_picker.js"),$_smarty_tpl);?>

<?php }
}
