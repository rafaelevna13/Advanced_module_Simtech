<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:46:59
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/discussion/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f04398ff45_96454635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9259d0b65fbfd905862706e37e7b840a112c4cd3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/discussion/hooks/index/styles.post.tpl',
      1 => 1670705140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f04398ff45_96454635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/discussion/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/discussion/responsive.less"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/discussion/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/discussion/responsive.less"),$_smarty_tpl);
}
}
}