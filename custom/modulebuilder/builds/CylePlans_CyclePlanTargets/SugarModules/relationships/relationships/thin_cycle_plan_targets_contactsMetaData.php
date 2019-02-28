<?php
// created: 2016-12-27 16:50:16
$dictionary["thin_cycle_plan_targets_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'thin_cycle_plan_targets_contacts' => 
    array (
      'lhs_module' => 'Thin_CyclePlanTargets',
      'lhs_table' => 'thin_cycleplantargets',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thin_cycle_plan_targets_contacts_c',
      'join_key_lhs' => 'thin_cycle_plan_targets_contactsthin_cycleplantargets_ida',
      'join_key_rhs' => 'thin_cycle_plan_targets_contactscontacts_idb',
    ),
  ),
  'table' => 'thin_cycle_plan_targets_contacts_c',
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
      'name' => 'thin_cycle_plan_targets_contactsthin_cycleplantargets_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thin_cycle_plan_targets_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thin_cycle_plan_targets_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thin_cycle_plan_targets_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thin_cycle_plan_targets_contactsthin_cycleplantargets_ida',
        1 => 'thin_cycle_plan_targets_contactscontacts_idb',
      ),
    ),
  ),
);