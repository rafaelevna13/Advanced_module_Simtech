<?php
use Tygh\Enum\UserTypes;

defined('BOOTSTRAP') or die('Access denied');


$schema['central']['customers']['items']['departments'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'departments.manage_department',
    'alt' => 'departments.manage_department',
    'position' => 400,
);

return $schema;
