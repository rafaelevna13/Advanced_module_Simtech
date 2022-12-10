<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/gdpr/componentes/agreement_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f047bddf07_45789228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea8ab2c2ac9ef2ee0a8b6bd9a02a7cfec3b5118' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/gdpr/componentes/agreement_checkbox.tpl',
      1 => 1670705140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/gdpr_tooltip.tpl' => 2,
  ),
),false)) {
function content_6394f047bddf07_45789228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_agreement', true ,false ,2);?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['suffix']->value;
}
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->_assignInScope('input_id', (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_prefixVariable20 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('gdpr_target_elem', ((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label");?>

        <div class="ty-gdpr-agreement">
            <label
                for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_label"
                class="<?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['input_value']->value ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                />
                <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle ty-gdpr-agreement--icon"),$_smarty_tpl);?>

            </label>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/gdpr_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'target_elem_id'=>$_smarty_tpl->tpl_vars['gdpr_target_elem']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/componentes/agreement_checkbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/componentes/agreement_checkbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_agreement', true ,false ,2);?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['suffix']->value;
}
$_prefixVariable21=ob_get_clean();
$_smarty_tpl->_assignInScope('input_id', (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_prefixVariable21 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('gdpr_target_elem', ((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label");?>

        <div class="ty-gdpr-agreement">
            <label
                for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_label"
                class="<?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['input_value']->value ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                />
                <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle ty-gdpr-agreement--icon"),$_smarty_tpl);?>

            </label>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/gdpr_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'target_elem_id'=>$_smarty_tpl->tpl_vars['gdpr_target_elem']->value), 0, true);
}
}
}
}
