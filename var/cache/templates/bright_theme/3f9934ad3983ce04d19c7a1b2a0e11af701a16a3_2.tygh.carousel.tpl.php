<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:47:00
  from '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/banners/blocks/carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394f044a3c0a5_74506999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f9934ad3983ce04d19c7a1b2a0e11af701a16a3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/themes/responsive/templates/addons/banners/blocks/carousel.tpl',
      1 => 1670705139,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6394f044a3c0a5_74506999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);
                },
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/carousel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/carousel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);
                },
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
