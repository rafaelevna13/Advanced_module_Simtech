<?php
/* Smarty version 4.1.0, created on 2022-12-10 23:45:51
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/index/components/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6394efff480c39_78197351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffda252391a5b1ff20a2060010070af1619b4c53' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/index/components/dashboard.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/helpdesk.tpl' => 2,
    'tygh:common/price.tpl' => 10,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/daterange_picker.tpl' => 1,
  ),
),false)) {
function content_6394efff480c39_78197351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'show_log_row' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/cscart/var/cache/templates/backend/ffda252391a5b1ff20a2060010070af1619b4c53_2.tygh.dashboard.tpl.php',
    'uid' => 'ffda252391a5b1ff20a2060010070af1619b4c53',
    'call_name' => 'smarty_template_function_show_log_row_3527978136394efff3c4e05_97046459',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period','activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message','vendor_payouts.current_balance_text','vendor_payouts.income','orders','sales','taxes','users_carts','active_products','out_of_stock_products','registered_customers','categories','vendors','web_pages','vendors_activity','vendors_activity.vendors_with_sales','vendors_activity.new_vendors','vendors_activity.vendors_with_new_products','vendors_activity.not_logged_in_vendors','vendors_activity.new_products','statistics','recent_orders','all','order','by','no_data','order','by','no_data','order_by_status','status','qty','shipping','recent_activity'));
$_smarty_tpl->_assignInScope('show_latest_orders', fn_check_permissions("orders",'manage','admin'));
$_smarty_tpl->_assignInScope('show_orders', fn_check_permissions("sales_reports",'reports','admin'));
$_smarty_tpl->_assignInScope('show_inventory', fn_check_permissions("products",'manage','admin'));
$_smarty_tpl->_assignInScope('show_users', fn_check_permissions("profiles",'manage','admin'));?>

<?php $_smarty_tpl->_assignInScope('user_can_view_orders', fn_check_view_permissions("orders.manage",'GET'));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function(_, $) {

        _.drawChart = function(is_day) {
            if (typeof google == "undefined") {
                return false;
            }

            function get_data(div) {
                var id = $(div).attr('id');
                var dataTable = new google.visualization.DataTable();
                if (is_day) {
                    dataTable.addColumn('timeofday', 'Date');
                } else {
                    dataTable.addColumn('date', 'Date');
                }
                dataTable.addColumn('number', '<?php echo $_smarty_tpl->__("previous_period");?>
');
                dataTable.addColumn('number', '<?php echo $_smarty_tpl->__("current_period");?>
');
                dataTable.addRows(_.chart_data[id]);

                var dataView = new google.visualization.DataView(dataTable);
                dataView.setColumns([0, 1, 2]);

                var date_formatter = new google.visualization.DateFormat({
                    pattern: "<?php echo strtr($_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
"
                });
                date_formatter.format(dataTable, 0);

                return dataView;
            }

            var chartwidth = $('.dashboard-statistics-chart').width();

            var options = {
                chartArea: {
                    left: 7,
                    top: 10,
                    width: chartwidth,
                    height: 208
                },
                colors: ['#ff9494','#33c49b'],
                tooltip: {
                    showColorCode: true
                },
                lineWidth: 1,
                hAxis: {
                    baselineColor: '#eaeef0',
                    textStyle: {
                        color: '#a3b2bf',
                        fontSize: 11
                    },
                    gridlines: {
                        count: 6,
                        color: '#f0f5f7',
                    }
                },
                legend: {
                    position: 'none'
                },
                pointSize: 6,
                vAxis: {
                    minValue: 0,
                    baselineColor: '#eaeef0',
                    textPosition: 'in',
                    textStyle: {
                        color: '#a3b2bf',
                        fontSize: 11
                    },
                    gridlines: {
                        count: 10,
                        color: '#eaeef0',
                    }
                }
            };
            if (!is_day) {
                options.hAxis.format = 'MMM d';
            }

            $('.dashboard-statistics-chart:visible').each(function(i, div) {
                var dataView = get_data(div);
                var chart = new google.visualization.AreaChart(div);
                chart.draw(dataView, options);
            });

            $('#statistics_tabs .tabs li').on('click', function() {
                $('.dashboard-statistics-chart:visible').each(function(i, div) {
                    var dataView = get_data(div);
                    var chart = new google.visualization.AreaChart(div);
                    chart.draw(dataView, options);
                });
            });
        };

        $(document).ready(function() {
            $.getScript('//www.google.com/jsapi', function() {
                setTimeout(function() { // do not remove it - otherwise it will be slow in ff
                    google.load('visualization', '1.0', {
                        packages: ['corechart'],
                        callback: function() {
                            _.drawChart(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
);
                        }
                    });
                }, 0);
            });

        });

        $(window).resize(function() {
            if(this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function() {
                $(this).trigger('resizeEnd');
            }, 1);
        });

        //redraw graph when window resize is completed
        $(window).on('resizeEnd', function() {
            chartwidth = $('.dashboard-statistics-chart').width();
            _.drawChart(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
);
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:index"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:index"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:alert_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:alert_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
            <div class="alert alert-block">
                <div class="debt-notification__text">
                    <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

                </div>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:alert_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && !$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && fn_check_permissions("addons","update","admin")) {?>
        <?php if (fn_allowed_for("ULTIMATE:FREE") && $_smarty_tpl->tpl_vars['is_activated_free']->value !== smarty_modifier_enum("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['auth']->value['company_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                <div class="well well-small help-block">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right cm-ajax",'btn_text'=>$_smarty_tpl->__("activate"),'btn_href'=>"helpdesk_connector.activate_license_mail_request"), 0, false);
?>
                    <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="well well-small help-block">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right"), 0, true);
?>
                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message");?>
</p>
            </div>
        <?php }?>
    <?php }?>

    <div class="dashboard row-fluid" id="dashboard">

        <div class="dashboard-cards span3">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:finance_statistic"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:finance_statistic"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <div class="dashboard-card dashboard-card--balance">
                        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_payouts.current_balance_text");?>
</div>
                        <div class="dashboard-card-content">
                            <h3>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:finance_statistic_balance"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:finance_statistic_balance"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <a href="<?php echo htmlspecialchars(fn_url("companies.balance"), ENT_QUOTES, 'UTF-8');?>
"
                                    ><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, false);
?></a>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:finance_statistic_balance"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </h3>
                            &nbsp;
                        </div>
                    </div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['period_income']->value))) {?>
                    <div class="dashboard-card">
                        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_payouts.income");?>
</div>
                        <div class="dashboard-card-content">
                            <h3>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['period_income']->value), 0, true);
?>
                            </h3>
                            &nbsp;
                        </div>
                    </div>
                <?php }?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("orders");?>
</div>
                    <div class="dashboard-card-content">
                        <h3>
                            <?php if ($_smarty_tpl->tpl_vars['user_can_view_orders']->value) {?>
                                <a href="<?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)."&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['orders']), ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php } else { ?>
                                <?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['orders']), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </h3>
                        <?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders']), ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['diff']['orders_count'] > 0) {?>+<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_stat']->value['diff']['orders_count'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders_total'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("sales");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']['totally_paid']), 0, true);
?></h3><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders_total']['totally_paid']), 0, true);
?>, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']['totally_paid'] > $_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders_total']['totally_paid']) {?>+<?php }
echo $_smarty_tpl->tpl_vars['orders_stat']->value['diff']['sales'];?>
%
                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['taxes'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("taxes");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['subtotal']), 0, true);
?></h3><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['prev_subtotal']), 0, true);
?>, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['subtotal'] > $_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['prev_subtotal']) {?>+<?php }
echo $_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['diff'];?>
%
                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("users_carts");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h3><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['orders_stat']->value['prev_abandoned_cart_total'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total'] > $_smarty_tpl->tpl_vars['orders_stat']->value['prev_abandoned_cart_total']) {?>+<?php }
echo $_smarty_tpl->tpl_vars['orders_stat']->value['diff']['abandoned_carts'];?>
%
                    </div>
                </div>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:finance_statistic"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:products_statistic"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:products_statistic"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['products'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("active_products");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><a href="<?php echo htmlspecialchars(fn_url("products.manage?status=A"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['total_products']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO")) {?>
                    <div class="dashboard-card">
                        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</div>
                        <div class="dashboard-card-content">
                            <h3><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars(fn_url("products.manage?amount_from=&amount_to=0&tracking[0]=".$_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['out_of_stock_products']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:products_statistic"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("registered_customers");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><a href="<?php echo htmlspecialchars(fn_url("profiles.manage?user_type=C"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['categories'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("categories");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['categories']['total_categories']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['companies']) && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendors");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><a href="<?php echo htmlspecialchars(fn_url("companies.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['companies']['total_companies']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    </div>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['pages'])) {?>
                <div class="dashboard-card">
                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("web_pages");?>
</div>
                    <div class="dashboard-card-content">
                        <h3><a href="<?php echo htmlspecialchars(fn_url("pages.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['pages']['total_pages']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    </div>
                </div>
            <?php }?>
        </div>

        <div class="dashboard-main-column span9">
            <?php if ((isset($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value))) {?>
                <div class="dashboard-row-top">
                    <div class="dashboard-table dashboard-vendors-activity">
                        <h4><?php echo $_smarty_tpl->__("vendors_activity");?>
</h4>
                        <div id="dashboard_vendors_activity">
                            <div class="span6">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="dashboard-vendors-activity__label">
                                            <?php $_smarty_tpl->_assignInScope('url', "companies.manage?sales_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&sales_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=A");?>
                                            <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->__("vendors_activity.vendors_with_sales");?>

                                            </a>
                                        </td>
                                        <td class="dashboard-vendors-activity__value">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_with_sales'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dashboard-vendors-activity__label">
                                            <a href="<?php echo htmlspecialchars(fn_url("companies.manage?created_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&created_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=A"), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->__("vendors_activity.new_vendors");?>

                                            </a>
                                        </td>
                                        <td class="dashboard-vendors-activity__value">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['new_vendors'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dashboard-vendors-activity__label">
                                            <?php $_smarty_tpl->_assignInScope('url', "companies.manage?extend[]=products&new_products_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&new_products_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=A");?>
                                            <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->__("vendors_activity.vendors_with_new_products");?>

                                            </a>
                                        </td>
                                        <td class="dashboard-vendors-activity__value">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_with_new_products'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="span6">
                                <table class="table">
                                    <tbody>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:vendors_activity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:vendors_activity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <tr>
                                                <td class="dashboard-vendors-activity__label">
                                                    <a href="<?php echo htmlspecialchars(fn_url("companies.manage?not_login_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&not_login_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=A"), ENT_QUOTES, 'UTF-8');?>
">
                                                        <?php echo $_smarty_tpl->__("vendors_activity.not_logged_in_vendors");?>

                                                    </a>
                                                </td>
                                                <td class="dashboard-vendors-activity__value">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_not_logged'], ENT_QUOTES, 'UTF-8');?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="dashboard-vendors-activity__label">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:dashboard_new_products_link"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:dashboard_new_products_link"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_smarty_tpl->_assignInScope('url', "products.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&period=C&status[]=A&company_status[]=A");?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:dashboard_new_products_link"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
                                                        <?php echo $_smarty_tpl->__("vendors_activity.new_products");?>

                                                    </a>
                                                </td>
                                                <td class="dashboard-vendors-activity__value">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['new_products'], ENT_QUOTES, 'UTF-8');?>

                                                </td>
                                            </tr>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:vendors_activity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </tbody>
                                </table>
                            </div>
                            <!--dashboard_vendors_activity--></div>
                    </div>
                </div>
            <?php }?>
            <div class="dashboard-row">
                <?php if (!empty($_smarty_tpl->tpl_vars['graphs']->value)) {?>
                    <div class="dashboard-statistics">
                        <h4>
                            <?php echo $_smarty_tpl->__("statistics");?>

                        </h4>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "chart_tabs", null, null);?>
                            <div id="content_sales_chart">
                                <div id="dashboard_statistics_sales_chart" class="dashboard-statistics-chart spinner">
                                </div>
                            </div>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:chart_statistic"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:chart_statistic"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:chart_statistic"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <div id="statistics_tabs">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chart_tabs')), 0, false);
?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                                Tygh.chart_data = {
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graphs']->value, 'graph', false, 'chart', 'graphs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['graph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value => $_smarty_tpl->tpl_vars['graph']->value) {
$_smarty_tpl->tpl_vars['graph']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['total'];
?>
                                    '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart']->value, ENT_QUOTES, 'UTF-8');?>
': [
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value, 'data', false, 'date', 'graph', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['total'];
?>
                                        [<?php if ($_smarty_tpl->tpl_vars['is_day']->value) {?>[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
, 0, 0, 0]<?php } else { ?>new Date(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['prev'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['cur'], ENT_QUOTES, 'UTF-8');?>
]<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_graph']->value['last'] : null)) {?>,<?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    ]<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_graphs']->value['last'] : null)) {?>,<?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                };
                                Tygh.drawChart(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
);
                            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <!--statistics_tabs--></div>
                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['order_statuses']->value)) {?>
                    <div class="dashboard-recent-orders cm-j-tabs tabs">
                        <h4><?php echo $_smarty_tpl->__("recent_orders");?>
</h4>
                        <ul class="nav nav-pills">
                            <li id="tab_recent_all" class="active cm-js"><a href="#status_all" data-toggle="tab"><?php echo $_smarty_tpl->__("all");?>
</a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_statuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <li id="tab_recent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a href="#status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>

                        <div class="cm-tabs-content">
                            <div class="tab-pane" id="content_tab_recent_all">
                                <div class="table-responsive-wrapper">
                                    <table class="table table-middle table--relative table-last-td-align-right table-responsive table-responsive-w-titles">
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value['all'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                            <tr>
                                                <td data-th="&nbsp;">
                                                    <span class="label btn-info o-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 label--text-wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['order']->value['status']]['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                </td>
                                                <td data-th="&nbsp;"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a> <?php echo $_smarty_tpl->__("by");?>
 <?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['order']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['firstname'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {?></a><?php }?></td>
                                                <td data-th="&nbsp;"><span class="date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></td>
                                                <td data-th="&nbsp;"><h4><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0, true);
?></h4></td>
                                            </tr>
                                            <?php
}
if ($_smarty_tpl->tpl_vars['order']->do_else) {
?>
                                            <tr><td data-th="&nbsp;"><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p></td></tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_statuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <div class="tab-pane" id="content_tab_recent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                                    <div class="table-responsive-wrapper">
                                        <table class="table table-middle table--relative table-last-td-align-right table-responsive table-responsive-w-titles">
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->tpl_vars['status']->value['status']], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                                <tr>
                                                    <td data-th="&nbsp;">
                                                        <span class="label btn-info o-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 label--text-wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['order']->value['status']]['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    </td>
                                                    <td data-th="&nbsp;"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a> <?php echo $_smarty_tpl->__("by");?>
 <?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['order']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['firstname'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {?></a><?php }?></td>
                                                    <td data-th="&nbsp;"><span class="date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></td>
                                                    <td data-th="&nbsp;"><h4><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0, true);
?></h4></td>
                                                </tr>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['order']->do_else) {
?>
                                                <tr><td data-th="&nbsp;"><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p></td></tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>
            </div>

            <div class="dashboard-row-bottom">
                <div class="dashboard-tables">

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:order_statistic"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:order_statistic"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:order_statistic"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:order_by_statuses"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:order_by_statuses"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['user_can_view_orders']->value && $_smarty_tpl->tpl_vars['order_by_statuses']->value) {?>
                        <div class="dashboard-table dashboard-table-order-by-statuses">
                            <h4><?php echo $_smarty_tpl->__("order_by_status");?>
</h4>
                            <div class="table-wrap" id="dashboard_order_by_status">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="25%"><?php echo $_smarty_tpl->__("status");?>
</th>
                                        <th width="25%"><?php echo $_smarty_tpl->__("qty");?>
</th>
                                        <th width="25%"><?php echo $_smarty_tpl->__('total');?>
</th>
                                        <th width="25%"><?php echo $_smarty_tpl->__("shipping");?>
</th>
                                    </tr>
                                    </thead>
                                </table>
                                <div class="scrollable-table">
                                    <table class="table table-striped table--relative">
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_by_statuses']->value, 'order_status');
$_smarty_tpl->tpl_vars['order_status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order_status']->value) {
$_smarty_tpl->tpl_vars['order_status']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('url', fn_url("orders.manage?is_search=Y&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)."&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status[]=".((string)$_smarty_tpl->tpl_vars['order_status']->value['status'])));?>
                                            <tr>
                                                <td width="25%"><a class="a--text-wrap" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                                                <td width="25%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['count'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                <td width="25%"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_status']->value['total']), 0, true);
?></td>
                                                <td width="25%"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_status']->value['shipping']), 0, true);
?></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--dashboard_order_by_status--></div>
                        </div>
                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:order_by_statuses"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['logs']->value && fn_check_view_permissions("logs.manage","GET")) {?>
                    <div class="dashboard-activity">
                        <div class="pull-right"><a href="<?php echo htmlspecialchars(fn_url("logs.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('show_all');?>
</a></div>
                        <h4><?php echo $_smarty_tpl->__("recent_activity");?>
</h4>
                        

                        <div class="dashboard-activity-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'show_log_row', array('item'=>$_smarty_tpl->tpl_vars['item']->value), true);?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <!--dashboard--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:index"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"dashboard_date_picker",'extra_class'=>"nav__actions-dashboard-date-picker pull-right",'data_url'=>fn_url("index.index?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)),'result_ids'=>"dashboard",'start_date'=>$_smarty_tpl->tpl_vars['time_from']->value,'end_date'=>$_smarty_tpl->tpl_vars['time_to']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
\Tygh\Languages\Helper::preloadLangVars(array('order'));
/* smarty_template_function_show_log_row_3527978136394efff3c4e05_97046459 */
if (!function_exists('smarty_template_function_show_log_row_3527978136394efff3c4e05_97046459')) {
function smarty_template_function_show_log_row_3527978136394efff3c4e05_97046459(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('item'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value) {?>
                                <div class="item">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:recent_activity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:recent_activity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_assignInScope('_type', "log_type_".((string)$_smarty_tpl->tpl_vars['item']->value['type']));?>
                                    <?php $_smarty_tpl->_assignInScope('_action', "log_action_".((string)$_smarty_tpl->tpl_vars['item']->value['action']));?>

                                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_type']->value);
if ($_smarty_tpl->tpl_vars['item']->value['action']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_action']->value);?>
)<?php }?>:

                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "users" && fn_check_view_permissions(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['content']['id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['user'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['content']['id']) {?></a><?php }?><br>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "orders" && fn_check_view_permissions(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['status'], ENT_QUOTES, 'UTF-8');?>
<br>
                                        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['order'], ENT_QUOTES, 'UTF-8');?>
</a><br>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "products" && fn_check_view_permissions(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {?>
                                        <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['product'], ENT_QUOTES, 'UTF-8');?>
</a><br>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "categories" && fn_check_view_permissions(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {?>
                                        <a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['category'], ENT_QUOTES, 'UTF-8');?>
</a><br>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:recent_activity_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:recent_activity_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:recent_activity_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <span class="date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:recent_activity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </div>
                            <?php }?>
                        <?php
}}
/*/ smarty_template_function_show_log_row_3527978136394efff3c4e05_97046459 */
}
