<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:48
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/statuses/components/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394effc56c937_63381951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad6b38b9050c70f05ab08d5d3ba6a42a5b17009' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/statuses/components/styles.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394effc56c937_63381951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
$_smarty_tpl->_assignInScope('statuses', fn_get_statuses($_smarty_tpl->tpl_vars['type']->value));
if ($_smarty_tpl->tpl_vars['statuses']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status_data', false, 'status');
$_smarty_tpl->tpl_vars['status_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['status_data']->value) {
$_smarty_tpl->tpl_vars['status_data']->do_else = false;
?>
        .<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }
}
}
