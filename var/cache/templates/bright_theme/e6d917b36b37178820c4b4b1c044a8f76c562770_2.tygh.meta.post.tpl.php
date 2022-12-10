<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:46:59
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/seo/hooks/index/meta.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f04387c803_67728001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d917b36b37178820c4b4b1c044a8f76c562770' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/seo/hooks/index/meta.post.tpl',
      1 => 1670705139,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394f04387c803_67728001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value, 'seo_alt_lang', false, 'seo_alt_lang_code');
$_smarty_tpl->tpl_vars['seo_alt_lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->do_else = false;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema_org_markup_items']->value, 'markup_item');
$_smarty_tpl->tpl_vars['markup_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->do_else = false;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->_assignInScope('pretty_print', 0);?>
        <?php if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->_assignInScope('pretty_print', constant("JSON_PRETTY_PRINT"));?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_assignInScope('is_json_schema_org_markup_displayed', true ,false ,8);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value, 'seo_alt_lang', false, 'seo_alt_lang_code');
$_smarty_tpl->tpl_vars['seo_alt_lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->do_else = false;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema_org_markup_items']->value, 'markup_item');
$_smarty_tpl->tpl_vars['markup_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->do_else = false;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->_assignInScope('pretty_print', 0);?>
        <?php if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->_assignInScope('pretty_print', constant("JSON_PRETTY_PRINT"));?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_assignInScope('is_json_schema_org_markup_displayed', true ,false ,8);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
