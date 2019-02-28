<?php
// created: 2017-01-04 15:07:30
$dictionary["thin_cycleplans_thin_cycleplantargets"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'thin_cycleplans_thin_cycleplantargets' => 
    array (
      'lhs_module' => 'Thin_CyclePlans',
      'lhs_table' => 'thin_cycleplans',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thin_cycleplans_thin_cycleplantargets_c',
      'join_key_lhs' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
      'join_key_rhs' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb',
    ),
  ),
  'table' => 'thin_cycleplans_thin_cycleplantargets_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargetsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargets_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargets_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb',
      ),
    ),
  ),
);