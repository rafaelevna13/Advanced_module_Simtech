<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:49
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/comet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394effd7180c0_74452091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5fc14f233086447a853b6b58752cd1bf8651c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/comet.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394effd7180c0_74452091 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}
