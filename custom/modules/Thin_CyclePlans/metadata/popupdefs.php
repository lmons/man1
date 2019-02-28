<?php
$popupMeta = array (
    'moduleMain' => 'Thin_CyclePlans',
    'varName' => 'Thin_CyclePlans',
    'orderBy' => 'thin_cycleplans.name',
    'whereClauses' => array (
  'name' => 'thin_cycleplans.name',
  'assigned_user_id' => 'thin_cycleplans.assigned_user_id',
  'cp_type_c' => 'thin_cycleplans_cstm.cp_type_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'cp_type_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
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
    'width' => '10%',
  ),
  'cp_type_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CP_TYPE',
    'width' => '10%',
    'name' => 'cp_type_c',
  ),
),
);
