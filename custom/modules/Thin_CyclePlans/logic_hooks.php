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
    'custom/modules/Thin_CyclePlans/CyclePlansHook.php',

    //The class the method is in.
    'CyclePlansHook',

    //The method to call.
    'assignUserFromTerritory'
);
$hook_array['after_ui_frame'][] = Array(
    //Processing index. For sorting the array.
    4,

    //Label. A string value to identify the hook.
    'after_ui_frame function_to_ge_checked_targets',

    //The PHP file where your class is located.
    'custom/modules/Thin_CyclePlans/AfterUiFrameHooks.php',

    //The class the method is in.
    'AfterUiFrameHooks',

    //The method to call.
    'pushCheckedContacts'
);
$hook_array['after_ui_frame'][] = Array(
    //Processing index. For sorting the array.
    4,

    //Label. A string value to identify the hook.
    'after_ui_frame function_to_count_submitted_calls_and_call_frequency',

    //The PHP file where your class is located.
    'custom/modules/Thin_CyclePlans/AfterUiFrameHooks.php',

    //The class the method is in.
    'AfterUiFrameHooks',

    //The method to call.
    'countFrequencySubmittedCalls'
);
