<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:00
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/views/block_manager/render/block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f0443d3c38_68311285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083b77943548f156738c8f6a04885632d7e28626' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1670705136,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/block.tpl' => 1,
  ),
),false)) {
function content_6394f0443d3c38_68311285 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>ty-float-left<?php }?>">
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            </div>
        <?php }?>
    <?php }
}
}
}
