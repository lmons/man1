<?php

    $hook_version = 1;

    $hook_array = array();
    $hook_array['after_save'] = array();
    $hook_array['after_save'][] = array(
        1,
        'before_save setDuration',
        'custom/modules/Meetings/BeforeSaveLogicHook.php',
        'BeforeSaveLogicHookMeeting',
        'setDuration'
    );
$hook_array['before_relationship_delete'][] = array(
    2,
    'before_relationship_delete restoreUser',
    'custom/modules/Meetings/BeforeSaveLogicHook.php',
    'BeforeSaveLogicHookMeeting',
    'restoreUser'
);
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = array(
    2,
    'before_relationship_delete restoreUser',
    'custom/modules/Meetings/ListViewLogicHook.php',
    'ListViewLogicHook',
    'getDurationListValue'
);

