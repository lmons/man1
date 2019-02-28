<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(3, 'Force Relationship Policy', 'modules/dash_DashboardManager/logic_hooks/DashboardManager_User_Hooks.php','DashboardManager_User_Hooks', 'forceRelationshipPolicy'); 
$hook_array['after_logout'] = Array();
    $hook_array['after_logout'][] = Array(
        //Processing index. For sorting the array.
        2,

        //Label. A string value to identify the hook.
        'after_logout example',

        //The PHP file where your class is located.
        'custom/modules/Users/logic_hooks_class.php',

        //The class the method is in.
        'logic_hooks_class',

        //The method to call.
        'after_logout_method'
    );



?>