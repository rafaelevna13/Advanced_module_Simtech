<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:01
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f045ef8485_99090858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f5ebc3360267c61b5df54f3ce32d7777a8fa85' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl',
      1 => 1670705138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f045ef8485_99090858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_features_variants", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'variation_feature');
$_smarty_tpl->tpl_vars['variation_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog'] === smarty_modifier_enum("YesNo::YES")) {?>
            <div class="ty-grid-list__item-features-item">
                <span class="ty-grid-list__item-features-description">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                </span>
                <?php $_smarty_tpl->_assignInScope('variant_names', array());?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation_feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES")) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variant_names']) ? $_smarty_tpl->tpl_vars['variant_names']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['variant']->value['variant'];
$_smarty_tpl->_assignInScope('variant_names', $_tmp_array);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variant_names']->value, 'variant_name', true);
$_smarty_tpl->tpl_vars['variant_name']->iteration = 0;
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
$_smarty_tpl->tpl_vars['variant_name']->iteration++;
$_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
$__foreach_variant_name_54_saved = $_smarty_tpl->tpl_vars['variant_name'];
?>
                    <span class="ty-grid-list__item-features-variant">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?>,<?php }?>
                    </span>
                <?php
$_smarty_tpl->tpl_vars['variant_name'] = $__foreach_variant_name_54_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ty-grid-list__item-features">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants');?>

        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_features_variants", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'variation_feature');
$_smarty_tpl->tpl_vars['variation_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog'] === smarty_modifier_enum("YesNo::YES")) {?>
            <div class="ty-grid-list__item-features-item">
                <span class="ty-grid-list__item-features-description">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                </span>
                <?php $_smarty_tpl->_assignInScope('variant_names', array());?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation_feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES")) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variant_names']) ? $_smarty_tpl->tpl_vars['variant_names']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['variant']->value['variant'];
$_smarty_tpl->_assignInScope('variant_names', $_tmp_array);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variant_names']->value, 'variant_name', true);
$_smarty_tpl->tpl_vars['variant_name']->iteration = 0;
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
$_smarty_tpl->tpl_vars['variant_name']->iteration++;
$_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
$__foreach_variant_name_57_saved = $_smarty_tpl->tpl_vars['variant_name'];
?>
                    <span class="ty-grid-list__item-features-variant">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?>,<?php }?>
                    </span>
                <?php
$_smarty_tpl->tpl_vars['variant_name'] = $__foreach_variant_name_57_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ty-grid-list__item-features">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants');?>

        </div>
    <?php }
}
}
}
}
