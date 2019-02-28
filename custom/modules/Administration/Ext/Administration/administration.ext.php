<?php 
 //WARNING: The contents of this file are auto-generated



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


    //Dashboard Manager Panel
    $admin_option_defs=array();
    $admin_option_defs['Administration']['DashboardManager_DashboardManager'] = array('ModuleLoader','LBL_DASHBOARD_MANAGER','LBL_DASHBOARD_MANAGER_DESCRIPTION','index.php?module=dash_DashboardManager');
    $admin_option_defs['Administration']['DashboardManager_DashboardBackup'] = array('Backups','LBL_DASHBOARD_BACKUPS','LBL_DASHBOARD_BACKUPS_DESCRIPTION','index.php?module=dash_DashboardBackups');
    $admin_group_header[]= array('LBL_DASHBOARD_MANAGEMENT', '', false, $admin_option_defs, '');

?>