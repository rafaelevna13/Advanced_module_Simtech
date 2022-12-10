<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/blocks/our_brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f0477bb4e3_08748665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ee40328d8dce808ec2ed0bcce65e53178a9f83' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/blocks/our_brands.tpl',
      1 => 1670705136,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_6394f0477bb4e3_08748665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'for_brands', array (
));
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-grayscale",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'images'=>$_smarty_tpl->tpl_vars['brand']->value['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
            </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['brands']->value,'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/our_brands.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/our_brands.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'for_brands', array (
));
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-grayscale",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'images'=>$_smarty_tpl->tpl_vars['brand']->value['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
            </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['brands']->value,'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, true);
}
}
}
