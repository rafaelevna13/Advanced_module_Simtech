<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:00
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/common/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f04477c349_54297798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe26cbe556b1d92b9771078e9bb6e2f14f9726a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/common/search.tpl',
      1 => 1670705136,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 4,
  ),
),false)) {
function content_6394f04477c349_54297798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_general','search_products','storefront_search_button','storefront_search_button','storefront_search_general','search_products','storefront_search_button','storefront_search_button'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("storefront_search_general"));
} else {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("search_products"));
}?><input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_input_id'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, false);
} else {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
}?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_input_id", null, null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    </form>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("storefront_search_general"));
} else {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("search_products"));
}?><input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_input_id'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
}?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_input_id", null, null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    </form>
</div>
<?php }
}
}
