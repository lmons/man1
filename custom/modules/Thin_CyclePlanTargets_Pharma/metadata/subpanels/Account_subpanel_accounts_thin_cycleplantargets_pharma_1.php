<?php
// created: 2017-09-04 19:09:36
$subpanel_layout['list_fields'] = array (
  'thin_cycleplans_thin_cycleplantargets_pharma_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANS_TITLE',
    'id' => 'THIN_CYCLED5C3LEPLANS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Thin_CyclePlans',
    'target_record_key' => 'thin_cycled5c3leplans_ida',
  ),
  'customer_tier' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_CUSTOMER_TIER',
    'width' => '10%',
    'default' => true,
  ),
  'submitted_calls' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_SUBMITTED_CALLS',
    'width' => '10%',
    'default' => true,
  ),
  'call_frequency_target' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CALL_FREQUENCY_TARGET',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
);
$subpanel_layout['where']="(thin_cycleplantargets_pharma.id IN (".$_REQUEST['active_cycle_plan_pharma']."''))";