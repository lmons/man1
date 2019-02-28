<?php
// created: 2017-07-11 18:37:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
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
  'accounts_thin_cycleplantargets_pharma_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_thin_cycleplantargets_pharma_1accounts_ida',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
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
    'check_account_for_calls_non_db' =>
        array (
            'name' => 'check_account_for_calls_non_db',
            'vname' => 'LBL_SELECT_TARGET',
            'width' => '10%',
            'default' => true,
            'sortable' => false,
        ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Thin_CyclePlanTargets_Pharma',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Thin_CyclePlanTargets_Pharma',
    'width' => '5%',
    'default' => true,
  ),
);