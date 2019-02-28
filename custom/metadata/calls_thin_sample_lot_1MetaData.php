<?php
// created: 2017-03-10 19:21:24
$dictionary["calls_thin_sample_lot_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'calls_thin_sample_lot_1' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Sample_Lot',
      'rhs_table' => 'thin_sample_lot',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'calls_thin_sample_lot_1_c',
      'join_key_lhs' => 'calls_thin_sample_lot_1calls_ida',
      'join_key_rhs' => 'calls_thin_sample_lot_1thin_sample_lot_idb',
    ),
  ),
  'table' => 'calls_thin_sample_lot_1_c',
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
      'name' => 'calls_thin_sample_lot_1calls_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'calls_thin_sample_lot_1thin_sample_lot_idb',
      'type' => 'varchar',
      'len' => 36,
    )
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'calls_thin_sample_lot_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'calls_thin_sample_lot_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'calls_thin_sample_lot_1calls_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'calls_thin_sample_lot_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'calls_thin_sample_lot_1thin_sample_lot_idb',
      ),
    ),
  ),
);