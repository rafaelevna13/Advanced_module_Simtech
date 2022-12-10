<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/gdpr/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f047f18a62_43328604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8d7cbce7a09609a646b9cf4de984916c2a1fdf' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/gdpr/hooks/index/scripts.post.tpl',
      1 => 1670705140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f047f18a62_43328604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.klaro_accept_all','gdpr.klaro_accept_selected','gdpr.klaro_close','gdpr.klaro_consent_modal_description','gdpr.klaro_consent_modal_title','gdpr.klaro_consent_notice_change_description','gdpr.klaro_consent_notice_title','gdpr.klaro_consent_notice_description','gdpr.klaro_consent_notice_learn_more','gdpr.klaro_consent_notice_testing','gdpr.klaro_contextual_consent_accept_always','gdpr.klaro_contextual_consent_accept_once','gdpr.klaro_contextual_consent_description','gdpr.klaro_decline','gdpr.klaro_ok','gdpr.klaro_powered_by','gdpr.klaro_privacy_policy_title','gdpr.klaro_privacy_policy_name','gdpr.klaro_service','gdpr.klaro_services','gdpr.strictly_necessary_cookies_title','gdpr.strictly_necessary_cookies_description','gdpr.performance_cookies_title','gdpr.performance_cookies_description','gdpr.functional_cookies_title','gdpr.functional_cookies_description','gdpr.marketing_cookies_title','gdpr.marketing_cookies_description','gdpr.klaro_service_purpose','gdpr.klaro_service_purposes','gdpr.klaro_service_required_description','gdpr.eway_cookies_title','gdpr.eway_cookies_description','save','gdpr.disable_all_description','gdpr.disable_all_title','gdpr.opt_out_description','gdpr.opt_out_title','gdpr.klaro_service_required_title','gdpr.uk_cookies_law','gdpr.klaro_accept_all','gdpr.klaro_accept_selected','gdpr.klaro_close','gdpr.klaro_consent_modal_description','gdpr.klaro_consent_modal_title','gdpr.klaro_consent_notice_change_description','gdpr.klaro_consent_notice_title','gdpr.klaro_consent_notice_description','gdpr.klaro_consent_notice_learn_more','gdpr.klaro_consent_notice_testing','gdpr.klaro_contextual_consent_accept_always','gdpr.klaro_contextual_consent_accept_once','gdpr.klaro_contextual_consent_description','gdpr.klaro_decline','gdpr.klaro_ok','gdpr.klaro_powered_by','gdpr.klaro_privacy_policy_title','gdpr.klaro_privacy_policy_name','gdpr.klaro_service','gdpr.klaro_services','gdpr.strictly_necessary_cookies_title','gdpr.strictly_necessary_cookies_description','gdpr.performance_cookies_title','gdpr.performance_cookies_description','gdpr.functional_cookies_title','gdpr.functional_cookies_description','gdpr.marketing_cookies_title','gdpr.marketing_cookies_description','gdpr.klaro_service_purpose','gdpr.klaro_service_purposes','gdpr.klaro_service_required_description','gdpr.eway_cookies_title','gdpr.eway_cookies_description','save','gdpr.disable_all_description','gdpr.disable_all_title','gdpr.opt_out_description','gdpr.opt_out_title','gdpr.klaro_service_required_title','gdpr.uk_cookies_law'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "gdpr.klaro_accept_all": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_accept_all",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_accept_selected": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_accept_selected",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_close": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_close",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_modal_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_modal_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_modal_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_modal_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_change_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_change_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_learn_more": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_learn_more",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_testing": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_testing",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_accept_always": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_accept_always",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_accept_once": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_accept_once",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_decline": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_decline",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_ok": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_ok",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_powered_by": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_powered_by",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_privacy_policy_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_privacy_policy_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_privacy_policy_name": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_privacy_policy_name",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_services": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_services",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.strictly_necessary_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.strictly_necessary_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.strictly_necessary_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.strictly_necessary_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.performance_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.performance_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.performance_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.performance_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.functional_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.functional_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.functional_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.functional_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.marketing_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.marketing_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.marketing_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.marketing_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_purpose": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_purpose",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_purposes": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_purposes",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_required_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_required_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.eway_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.eway_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.eway_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.eway_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "save": '<?php echo strtr($_smarty_tpl->__("save",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.disable_all_description": '<?php echo strtr($_smarty_tpl->__("gdpr.disable_all_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.disable_all_title": '<?php echo strtr($_smarty_tpl->__("gdpr.disable_all_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.opt_out_description": '<?php echo strtr($_smarty_tpl->__("gdpr.opt_out_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.opt_out_title": '<?php echo strtr($_smarty_tpl->__("gdpr.opt_out_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_required_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_required_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.uk_cookies_law": '<?php echo strtr($_smarty_tpl->__("gdpr.uk_cookies_law",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/addons/gdpr/func.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "gdpr.klaro_accept_all": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_accept_all",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_accept_selected": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_accept_selected",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_close": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_close",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_modal_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_modal_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_modal_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_modal_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_change_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_change_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_learn_more": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_learn_more",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_consent_notice_testing": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_consent_notice_testing",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_accept_always": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_accept_always",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_accept_once": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_accept_once",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_contextual_consent_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_contextual_consent_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_decline": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_decline",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_ok": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_ok",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_powered_by": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_powered_by",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_privacy_policy_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_privacy_policy_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_privacy_policy_name": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_privacy_policy_name",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_services": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_services",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.strictly_necessary_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.strictly_necessary_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.strictly_necessary_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.strictly_necessary_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.performance_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.performance_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.performance_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.performance_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.functional_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.functional_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.functional_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.functional_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.marketing_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.marketing_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.marketing_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.marketing_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_purpose": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_purpose",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_purposes": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_purposes",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_required_description": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_required_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.eway_cookies_title": '<?php echo strtr($_smarty_tpl->__("gdpr.eway_cookies_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.eway_cookies_description": '<?php echo strtr($_smarty_tpl->__("gdpr.eway_cookies_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "save": '<?php echo strtr($_smarty_tpl->__("save",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.disable_all_description": '<?php echo strtr($_smarty_tpl->__("gdpr.disable_all_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.disable_all_title": '<?php echo strtr($_smarty_tpl->__("gdpr.disable_all_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.opt_out_description": '<?php echo strtr($_smarty_tpl->__("gdpr.opt_out_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.opt_out_title": '<?php echo strtr($_smarty_tpl->__("gdpr.opt_out_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.klaro_service_required_title": '<?php echo strtr($_smarty_tpl->__("gdpr.klaro_service_required_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "gdpr.uk_cookies_law": '<?php echo strtr($_smarty_tpl->__("gdpr.uk_cookies_law",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/addons/gdpr/func.js"),$_smarty_tpl);?>

<?php }
}
}
