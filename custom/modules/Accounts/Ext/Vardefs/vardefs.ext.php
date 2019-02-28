<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-12-30 13:01:08
$dictionary['Account']['fields']['city_c']['inline_edit']='1';
$dictionary['Account']['fields']['city_c']['labelValue']='City';

 

// created: 2017-07-11 18:22:57
$dictionary["Account"]["fields"]["accounts_thin_cycleplantargets_pharma_1"] = array (
  'name' => 'accounts_thin_cycleplantargets_pharma_1',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlanTargets_Pharma',
  'bean_name' => 'Thin_CyclePlanTargets_Pharma',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANTARGETS_PHARMA_TITLE',
);


 // created: 2017-05-16 13:58:45
$dictionary['Account']['fields']['account_subtype_c']['inline_edit']='1';
$dictionary['Account']['fields']['account_subtype_c']['labelValue']='Account Subtype';

 

 // created: 2017-04-26 14:33:38
$dictionary['Account']['fields']['acc_number_c']['inline_edit']='1';
$dictionary['Account']['fields']['acc_number_c']['labelValue']='ACC_NUMBER';

 

// created: 2017-04-10 20:06:32
$dictionary["Account"]["fields"]["accounts_thin_cycleplantargets_1"] = array (
  'name' => 'accounts_thin_cycleplantargets_1',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_1',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlanTargets',
  'bean_name' => 'Thin_CyclePlanTargets',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_THIN_CYCLEPLANTARGETS_TITLE',
);


 // created: 2016-12-29 18:19:01
$dictionary['Account']['fields']['account_type']['len']=100;
$dictionary['Account']['fields']['account_type']['inline_edit']=true;
$dictionary['Account']['fields']['account_type']['massupdate']='1';
$dictionary['Account']['fields']['account_type']['merge_filter']='disabled';
$dictionary['Account']['fields']['account_type']['comments']='The Company is of this type';

 

 // created: 2016-12-30 13:00:06
$dictionary['Account']['fields']['country_c']['inline_edit']='1';
$dictionary['Account']['fields']['country_c']['labelValue']='Country';

 

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


 // created: 2016-12-29 18:18:07
$dictionary['Account']['fields']['brick_c']['inline_edit']='1';
$dictionary['Account']['fields']['brick_c']['labelValue']='Brick';

 
?>