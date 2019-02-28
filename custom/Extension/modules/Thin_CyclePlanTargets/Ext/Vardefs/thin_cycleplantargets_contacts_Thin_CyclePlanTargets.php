<?php
// created: 2017-01-04 15:07:30
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplantargets_contacts"] = array (
  'name' => 'thin_cycleplantargets_contacts',
  'type' => 'link',
  'relationship' => 'thin_cycleplantargets_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'thin_cycleplantargets_contactscontacts_ida',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplantargets_contacts_name"] = array (
  'name' => 'thin_cycleplantargets_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'thin_cycleplantargets_contactscontacts_ida',
  'link' => 'thin_cycleplantargets_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplantargets_contactscontacts_ida"] = array (
  'name' => 'thin_cycleplantargets_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'thin_cycleplantargets_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
);
