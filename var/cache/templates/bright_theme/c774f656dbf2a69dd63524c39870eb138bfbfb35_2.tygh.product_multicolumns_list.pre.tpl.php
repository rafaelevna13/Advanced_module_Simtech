<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:01
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f045dd6710_17668899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c774f656dbf2a69dd63524c39870eb138bfbfb35' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl',
      1 => 1670705140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f045dd6710_17668899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','remove','remove'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="ty-twishlist-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-twishlist-item__txt ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="ty-twishlist-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-twishlist-item__txt ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }
}
}
}
