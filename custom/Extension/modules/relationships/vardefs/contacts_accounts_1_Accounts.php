<?php
// created: 2018-12-06 12:03:00
$dictionary["Account"]["fields"]["contacts_accounts_1"] = array (
  'name' => 'contacts_accounts_1',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_accounts_1contacts_ida',
);
$dictionary["Account"]["fields"]["contacts_accounts_1_name"] = array (
  'name' => 'contacts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link' => 'contacts_accounts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["contacts_accounts_1contacts_ida"] = array (
  'name' => 'contacts_accounts_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
