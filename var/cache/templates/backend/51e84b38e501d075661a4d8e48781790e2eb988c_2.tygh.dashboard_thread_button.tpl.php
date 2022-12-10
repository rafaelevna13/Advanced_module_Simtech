<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:51
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/dashboard_thread_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394efff4b6447_51061237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e84b38e501d075661a4d8e48781790e2eb988c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/dashboard_thread_button.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
  ),
),false)) {
function content_6394efff4b6447_51061237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.communication'));
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"));
$_smarty_tpl->_assignInScope('allow_manage', fn_check_permissions("vendor_communication","create_thread","admin","GET",array("communication_type"=>$_smarty_tpl->tpl_vars['communication_type']->value)));
$_smarty_tpl->_assignInScope('allow_new_thread', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['allow_manage']->value && $_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <div class="dashboard-card dashboard-card--contact_admin">
        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_communication.communication");?>
</div>
        <div class="dashboard-card-content">
            <div class="control-group shift-top">
                <h3>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-size"), 0, false);
?>
                </h3>
            </div>
        </div>
    </div>
<?php }
}
}
