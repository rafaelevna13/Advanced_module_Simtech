<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:01
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/views/products/components/quick_view_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f045f1c875_55413302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea152d384094f2990d95ab33782b765b1d5a861' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/views/products/components/quick_view_link.tpl',
      1 => 1670705136,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f045f1c875_55413302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('quick_product_viewer','quick_view','quick_product_viewer','quick_view'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-quick-view-button">
    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_REQUEST['redirect_url']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "quick_view_url", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_quick_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_assignInScope('quick_view_url', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'quick_view_url')));?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type'] && $_smarty_tpl->tpl_vars['block']->value['type'] != 'main') {?>
        <?php $_smarty_tpl->_assignInScope('quick_view_url', fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->_assignInScope('quick_nav_ids', implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value));?>
        <?php $_smarty_tpl->_assignInScope('quick_view_url', fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)));?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/quick_view_link.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/quick_view_link.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-quick-view-button">
    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_REQUEST['redirect_url']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "quick_view_url", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_quick_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_assignInScope('quick_view_url', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'quick_view_url')));?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type'] && $_smarty_tpl->tpl_vars['block']->value['type'] != 'main') {?>
        <?php $_smarty_tpl->_assignInScope('quick_view_url', fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->_assignInScope('quick_nav_ids', implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value));?>
        <?php $_smarty_tpl->_assignInScope('quick_view_url', fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)));?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php }
}
}
