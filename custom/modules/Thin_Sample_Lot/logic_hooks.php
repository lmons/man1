<?PHP

$hook_version = 1;
$hook_array = Array();
$hook_array['process_record'][] = Array(
    1,
    'process_record show_quantity',
    'custom/modules/Thin_Sample_Lot/ProcessRecordHook.php',
    'ProcessRecordHook',
    'showQuantity'
);



