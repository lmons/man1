<?php
$module_name = 'Thin_CyclePlanTargets';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'customer_tier' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CUSTOMER_TIER',
        'width' => '10%',
        'default' => true,
        'name' => 'customer_tier',
      ),
      'week_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_WEEK',
        'width' => '10%',
        'name' => 'week_c',
      ),
      'specialty_non_db' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SPECIALTY',
        'width' => '10%',
        'name' => 'specialty_non_db',
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
