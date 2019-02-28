<?php
// created: 2017-01-04 13:31:44
$dictionary["thin_cycleplans_terri_territoire"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'thin_cycleplans_terri_territoire' => 
    array (
      'lhs_module' => 'Thin_CyclePlans',
      'lhs_table' => 'thin_cycleplans',
      'lhs_key' => 'id',
      'rhs_module' => 'Terri_Territoire',
      'rhs_table' => 'terri_territoire',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thin_cycleplans_terri_territoire_c',
      'join_key_lhs' => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
      'join_key_rhs' => 'thin_cycleplans_terri_territoireterri_territoire_idb',
    ),
  ),
  'table' => 'thin_cycleplans_terri_territoire_c',
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
      'name' => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thin_cycleplans_terri_territoireterri_territoire_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thin_cycleplans_terri_territoirespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thin_cycleplans_terri_territoire_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'thin_cycleplans_terri_territoire_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thin_cycleplans_terri_territoireterri_territoire_idb',
      ),
    ),
  ),
);