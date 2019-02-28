<?php
// created: 2018-08-28 11:52:11
$dictionary["calls_thin_key_messages_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'calls_thin_key_messages_1' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Key_Messages',
      'rhs_table' => 'thin_key_messages',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'calls_thin_key_messages_1_c',
      'join_key_lhs' => 'calls_thin_key_messages_1calls_ida',
      'join_key_rhs' => 'calls_thin_key_messages_1thin_key_messages_idb',
    ),
  ),
  'table' => 'calls_thin_key_messages_1_c',
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
      'name' => 'calls_thin_key_messages_1calls_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'calls_thin_key_messages_1thin_key_messages_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'calls_thin_key_messages_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'calls_thin_key_messages_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'calls_thin_key_messages_1calls_ida',
        1 => 'calls_thin_key_messages_1thin_key_messages_idb',
      ),
    ),
  ),
);