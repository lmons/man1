<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'after_relationship_add account_contact_rel_add',

    //The PHP file where your class is located.
    'custom/modules/Accounts/AfterRelationshipAdd.php',

    //The class the method is in.
    'AfterRelationshipAdd',

    //The method to call.
    'AssignAddressToContact'
);

?>