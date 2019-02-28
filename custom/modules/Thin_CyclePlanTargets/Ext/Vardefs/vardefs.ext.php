<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-12-28 14:21:50
$dictionary['Thin_CyclePlanTargets']['fields']['active__c']['inline_edit']='1';
$dictionary['Thin_CyclePlanTargets']['fields']['active__c']['labelValue']='active';

 

 // created: 2018-12-28 14:18:37
$dictionary['Thin_CyclePlanTargets']['fields']['active_c']['inline_edit']='1';
$dictionary['Thin_CyclePlanTargets']['fields']['active_c']['labelValue']='active';

 

$dictionary["Thin_CyclePlanTargets"]["fields"]["accounts_non_db"] = array (
    'name' => 'accounts_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_ACCOUNTS',
    'reportable' =>true,
    'source' => 'non-db'
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["specialty_non_db"] = array (
    'name' => 'specialty_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_SPECIALTY',
    'reportable' =>true,
    'source' => 'non-db',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["brick_non_db"] = array (
    'name' => 'brick_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_BRICK',
    'reportable' =>true,
    'source' => 'non-db'
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["check_contact_for_calls_non_db"] = array (
    'name' => 'check_contact_for_calls_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_SELECT_TARGET',
    'reportable' =>true,
    'source' => 'non-db',
);


 // created: 2017-05-02 17:53:13
$dictionary['Thin_CyclePlanTargets']['fields']['week_c']['inline_edit']='1';
$dictionary['Thin_CyclePlanTargets']['fields']['week_c']['labelValue']='Week';

 

// created: 2017-01-04 15:07:30
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplans_thin_cycleplantargets"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlans',
  'bean_name' => 'Thin_CyclePlans',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANS_TITLE',
  'id_name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplans_thin_cycleplantargets_name"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANS_TITLE',
  'save' => true,
  'id_name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
  'link' => 'thin_cycleplans_thin_cycleplantargets',
  'table' => 'thin_cycleplans',
  'module' => 'Thin_CyclePlans',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
);


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


// created: 2017-04-10 20:06:32
$dictionary["Thin_CyclePlanTargets"]["fields"]["accounts_thin_cycleplantargets_1"] = array (
  'name' => 'accounts_thin_cycleplantargets_1',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_thin_cycleplantargets_1accounts_ida',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["accounts_thin_cycleplantargets_1_name"] = array (
  'name' => 'accounts_thin_cycleplantargets_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_thin_cycleplantargets_1accounts_ida',
  'link' => 'accounts_thin_cycleplantargets_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlanTargets"]["fields"]["accounts_thin_cycleplantargets_1accounts_ida"] = array (
  'name' => 'accounts_thin_cycleplantargets_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_THIN_CYCLEPLANTARGETS_TITLE',
);

?>