<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:43
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/call_requests/settings/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394eff725e3b7_47535994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05410c3b010d218f474d17ecd1db3a8503a10bcf' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1665485908,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394eff725e3b7_47535994 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}
