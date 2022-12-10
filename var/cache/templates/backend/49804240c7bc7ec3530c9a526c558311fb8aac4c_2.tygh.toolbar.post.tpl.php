<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:49
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394effd4e6d83_29499113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49804240c7bc7ec3530c9a526c558311fb8aac4c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1665485908,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394effd4e6d83_29499113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }
}
}
