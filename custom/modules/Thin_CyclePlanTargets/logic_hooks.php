<?PHP

$hook_version = 1;
$hook_array = Array();


$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'before_save cycle_plans_hook',

    //The PHP file where your class is located.
    'custom/modules/Thin_CyclePlanTargets/CyclePlanTargetsHook.php',

    //The class the method is in.
    'CyclePlanTargetsHook',

    //The method to call.
    'setCptNameFromId'

);

$hook_array['process_record'][] = Array(
    2,
    'process_record show_accounts',
    'custom/modules/Thin_CyclePlanTargets/ShowContactRelatedInformations.php',
    'ShowContactRelatedInformations',
    'showRelatedAccounts'
);



