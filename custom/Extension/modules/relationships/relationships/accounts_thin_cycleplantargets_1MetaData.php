<?php
// created: 2017-04-10 20:06:31
$dictionary["accounts_thin_cycleplantargets_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_thin_cycleplantargets_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_thin_cycleplantargets_1_c',
      'join_key_lhs' => 'accounts_thin_cycleplantargets_1accounts_ida',
      'join_key_rhs' => 'accounts_thin_cycleplantargets_1thin_cycleplantargets_idb',
    ),
  ),
  'table' => 'accounts_thin_cycleplantargets_1_c',
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
      'name' => 'accounts_thin_cycleplantargets_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1thin_cycleplantargets_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_thin_cycleplantargets_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_thin_cycleplantargets_1thin_cycleplantargets_idb',
      ),
    ),
  ),
);