<?php

    $hook_version = 1;

    $hook_array = array();
    $hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'before_save insertContactsInAccount',
    'custom/modules/Calls/BeforeSaveLogicHook.php',
    'BeforeSaveLogicHook',
    'setCallsStatus'
);
    $hook_array['before_save'][] = array(
        1,
        'before_save setCallSubject',
        'custom/modules/Calls/BeforeSaveLogicHook.php',
        'BeforeSaveLogicHook',
        'setCallSubject'
    );
    $hook_array['before_save'][] = array(
        1,
        'before_save setSubmittedCalls',
        'custom/modules/Calls/BeforeSaveLogicHook.php',
        'BeforeSaveLogicHook',
        'setSubmittedCalls'
    );
    $hook_array['before_save'][] = array(
        2,
        'before_save setSubmittedCalls',
        'custom/modules/Calls/BeforeSaveLogicHook.php',
        'BeforeSaveLogicHook',
        'setCallLocationName'
    );
    $hook_array['before_save'][] = array(
        3,
        'before_save insertPresentedProduct',
        'custom/modules/Calls/BeforeSaveLogicHook.php',
        'BeforeSaveLogicHook',
        'insertPresentedProductAndSamples'
    );
$hook_array['before_save'][] = array(
    4,
    'before_save insertContactsInAccount',
    'custom/modules/Calls/BeforeSaveLogicHook.php',
    'BeforeSaveLogicHook',
    'insertContactsInAccount'
);



?>