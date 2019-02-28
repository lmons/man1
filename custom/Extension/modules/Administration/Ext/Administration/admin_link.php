<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['planification'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'Administration',

    //Link name label
    'LBL_TH_ADMIN_PLAN_NAME',

    //Link description label
    '',

    //Link URL
    './index.php?module=Calls&action=setPlanSubmitConfiguration',
);

$admin_group_header[] = array(
    //Section header label
    'LBL_TH_ADMIN_NAME',

    //$other_text parameter for get_form_header()
    '',

    //$show_help parameter for get_form_header()
    false,

    //Section links
    $admin_option_defs,

    //Section description label
    ''
);