<?php 
 //WARNING: The contents of this file are auto-generated


/*    $layout_defs["Contacts"]["subpanel_setup"]["accounts"] = array(
        'order' => 100, 
        'module' => 'Accounts',
        'subpanel_name' => 'default', 
        'sort_order' => 'asc',
        'sort_by' => 'id',
        'title_key' => 'LBL_ACCOUNTS',
        'get_subpanel_data' => 'accounts', 
        'top_buttons' => array(
            0 => array(
                'widget_class' =>'SubPanelTopCreateButton',
            ),
            1 => array(
                'widget_class' => 'SubPanelTopSelectButton',
                'popup_module'=> 'Accounts', 
                'mode' => 'MultiSelect',
            ),
        ),
    );*/


 // created: 2018-12-06 12:03:00
$layout_defs["Contacts"]["subpanel_setup"]['contacts_accounts_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'contacts_accounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


$layout_defs["Contacts"]["subpanel_setup"]['history']['top_buttons'] = array(
  /*  array('widget_class' => 'SubPanelTopCreateNoteButton'),
    array('widget_class' => 'SubPanelTopArchiveEmailButton'),
    array('widget_class' => 'SubPanelTopSummaryButton'),*/
    array('widget_class' => 'SubPanelTopFilterButton'),

);

$layout_defs["Contacts"]["subpanel_setup"]['activities']['top_buttons'] = array(
  /*  array('widget_class' => 'SubPanelTopCreateTaskButton'),
    array('widget_class' => 'SubPanelTopScheduleMeetingButton'),
    array('widget_class' => 'SubPanelTopComposeEmailButton'),*/
    array('widget_class' => 'SubPanelTopScheduleCallButton'),

);

 // created: 2017-01-04 15:07:30
$layout_defs["Contacts"]["subpanel_setup"]['thin_cycleplantargets_contacts'] = array (
  'order' => 100,
  'module' => 'Thin_CyclePlanTargets',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
  'get_subpanel_data' => 'thin_cycleplantargets_contacts',
  'top_buttons' => 
  array (
  /*  0 =>
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),*/
  ),
);



$layout_defs['Contacts']['subpanel_setup']['history_planned_held'] =
    array('order' => 20,
        'module' => 'Calls',
        'subpanel_name' => 'ForActivities_1',
        'get_subpanel_data' => 'calls',
        'generate_select' => true,
        'title_key' => 'LBL_CALLS_WITH_PLANNED_HELD',
        'top_buttons' => array(),

    );

//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['thin_cycleplantargets_contacts']['override_subpanel_name'] = 'Contact_subpanel_thin_cycleplantargets_contacts';

?>