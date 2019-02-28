<?php
$module_name = 'Thin_CyclePlans';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'cp_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CP_TYPE',
        'width' => '10%',
        'name' => 'cp_type_c',
      ),
      'active' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      'active' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
