<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:03
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/geo_maps/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f047e03d39_71455287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1a1c6c9f3563b82a97c6592ac14b402288c119' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/geo_maps/hooks/index/scripts.post.tpl',
      1 => 1670705137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:addons/geo_maps/components/scripts.tpl' => 2,
  ),
),false)) {
function content_6394f047e03d39_71455287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.google_maps_cookie_title','geo_maps.google_maps_cookie_description','geo_maps.yandex_maps_cookie_title','geo_maps.yandex_maps_cookie_description','geo_maps.google_maps_cookie_title','geo_maps.google_maps_cookie_description','geo_maps.yandex_maps_cookie_title','geo_maps.yandex_maps_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("backend:addons/geo_maps/components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo smarty_function_script(array('src'=>"js/addons/geo_maps/locator.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "geo_maps.google_maps_cookie_title": '<?php echo strtr($_smarty_tpl->__("geo_maps.google_maps_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.google_maps_cookie_description": '<?php echo strtr($_smarty_tpl->__("geo_maps.google_maps_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.yandex_maps_cookie_title": '<?php echo strtr($_smarty_tpl->__("geo_maps.yandex_maps_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.yandex_maps_cookie_description": '<?php echo strtr($_smarty_tpl->__("geo_maps.yandex_maps_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("backend:addons/geo_maps/components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo smarty_function_script(array('src'=>"js/addons/geo_maps/locator.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "geo_maps.google_maps_cookie_title": '<?php echo strtr($_smarty_tpl->__("geo_maps.google_maps_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.google_maps_cookie_description": '<?php echo strtr($_smarty_tpl->__("geo_maps.google_maps_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.yandex_maps_cookie_title": '<?php echo strtr($_smarty_tpl->__("geo_maps.yandex_maps_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "geo_maps.yandex_maps_cookie_description": '<?php echo strtr($_smarty_tpl->__("geo_maps.yandex_maps_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
