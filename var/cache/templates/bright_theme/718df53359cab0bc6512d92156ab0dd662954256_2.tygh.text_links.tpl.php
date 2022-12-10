<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/addons/blog/blocks/text_links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f0476e2c26_06445089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718df53359cab0bc6512d92156ab0dd662954256' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/bright_theme/templates/addons/blog/blocks/text_links.tpl',
      1 => 1670705138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f0476e2c26_06445089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('view_all','view_all'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('parent_id', $_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id']);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div class="ty-blog-text-links">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page', false, NULL, 'fe_blog', array (
));
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <li class="ty-blog-text-links__item">
                    <div class="ty-blog-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-s ty-uppercase">
            <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </div>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('parent_id', $_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id']);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div class="ty-blog-text-links">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page', false, NULL, 'fe_blog', array (
));
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <li class="ty-blog-text-links__item">
                    <div class="ty-blog-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-s ty-uppercase">
            <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </div>
        <?php }?>
    </div>
<?php }
}
}
}
