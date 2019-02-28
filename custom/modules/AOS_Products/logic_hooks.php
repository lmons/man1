<?PHP

$hook_version = 1;
$hook_array = Array();
$hook_array['process_record'][] = Array(
    1,
    'process_record show_priority',
    'custom/modules/AOS_Products/ProcessRecordHook.php',
    'ProductProcessRecordHook',
    'showPriority'
);



