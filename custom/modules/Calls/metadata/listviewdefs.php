<?php
$listViewDefs ['Calls'] = 
array (
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'CALL_LOCATION_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CALL_LOCATION_NAME',
    'width' => '10%',
  ),
  'PARENT_TYPE' => 
  array (
    'type' => 'parent_type',
    'label' => 'LBL_PARENT_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_START' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
  ),
  'DURATION_MINUTES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURATION_MINUTES',
    'width' => '10%',
    'default' => true,
  ),
  'CALL_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CALL_TYPE',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'ACCOMPANYING_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ACCOMPANYING',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PARENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => false,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
  ),
  'DATE_END' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
);
?>
