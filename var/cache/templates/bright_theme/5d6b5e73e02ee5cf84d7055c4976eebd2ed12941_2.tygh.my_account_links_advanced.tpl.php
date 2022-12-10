<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/blocks/static_templates/my_account_links_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f047c37ec4_77948765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6b5e73e02ee5cf84d7055c4976eebd2ed12941' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/blocks/static_templates/my_account_links_advanced.tpl',
      1 => 1670705136,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f047c37ec4_77948765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('profile_details','sign_in','create_account','orders','wishlist','comparison_list','profile_details','sign_in','create_account','orders','wishlist','comparison_list'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-account-info__links">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
    <li><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
        <li><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("wishlist");?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comparison_list");?>
</a></li>
    <?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/my_account_links_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/my_account_links_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-account-info__links">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
    <li><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
        <li><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("wishlist");?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comparison_list");?>
</a></li>
    <?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php }
}
}
