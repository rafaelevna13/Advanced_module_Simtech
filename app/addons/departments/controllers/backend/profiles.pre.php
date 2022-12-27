<?php

use Tygh\Registry;


if (isset($_REQUEST['pre_profiles_to_departments'])){

    $auth = & Tygh::$app['session']['auth'];

        if ($mode == "picker") {
            $params = $_REQUEST;
            $params['skip_view'] = 'Y';

            list($users, $search) = fn_get_users($params, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));
            Tygh::$app['view']->assign('users', $users);
            Tygh::$app['view']->assign('search', $search);

            Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
            Tygh::$app['view']->assign('states', fn_get_all_states());
            Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('status' => array('A', 'H')), CART_LANGUAGE));

            Tygh::$app['view']->display('pickers/users/picker_contents.tpl');
            exit;
    }
}

