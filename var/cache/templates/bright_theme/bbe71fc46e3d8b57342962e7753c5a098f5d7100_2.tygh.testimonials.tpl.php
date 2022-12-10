<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/addons/discussion/blocks/testimonials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f04771eea2_90135426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbe71fc46e3d8b57342962e7753c5a098f5d7100' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/addons/discussion/blocks/testimonials.tpl',
      1 => 1670705140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
  ),
),false)) {
function content_6394f04771eea2_90135426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('view_all','view_all'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D" && $_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <div class="ty-discussion-post__content">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                <div class="clearfix ty-discussion-post__rating">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
            <?php }?>

        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="ty-mtb-s ty-left ty-uppercase">
    <a href="<?php echo htmlspecialchars(fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/blocks/testimonials.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/blocks/testimonials.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D" && $_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <div class="ty-discussion-post__content">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                <div class="clearfix ty-discussion-post__rating">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
            <?php }?>

        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="ty-mtb-s ty-left ty-uppercase">
    <a href="<?php echo htmlspecialchars(fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
</div>
<?php }
}
}
}
