<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-07-11 18:17:45
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["thin_cycleplans_thin_cycleplantargets_pharma_1"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlans',
  'bean_name' => 'Thin_CyclePlans',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANS_TITLE',
  'id_name' => 'thin_cycled5c3leplans_ida',
);
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["thin_cycleplans_thin_cycleplantargets_pharma_1_name"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets_pharma_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANS_TITLE',
  'save' => true,
  'id_name' => 'thin_cycled5c3leplans_ida',
  'link' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'table' => 'thin_cycleplans',
  'module' => 'Thin_CyclePlans',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["thin_cycled5c3leplans_ida"] = array (
  'name' => 'thin_cycled5c3leplans_ida',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANTARGETS_PHARMA_TITLE',
);


// created: 2017-07-11 18:22:57
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["accounts_thin_cycleplantargets_pharma_1"] = array (
  'name' => 'accounts_thin_cycleplantargets_pharma_1',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_thin_cycleplantargets_pharma_1accounts_ida',
);
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["accounts_thin_cycleplantargets_pharma_1_name"] = array (
  'name' => 'accounts_thin_cycleplantargets_pharma_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_thin_cycleplantargets_pharma_1accounts_ida',
  'link' => 'accounts_thin_cycleplantargets_pharma_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["accounts_thin_cycleplantargets_pharma_1accounts_ida"] = array (
  'name' => 'accounts_thin_cycleplantargets_pharma_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANTARGETS_PHARMA_TITLE',
);


$dictionary["Thin_CyclePlanTargets_Pharma"]["fields"]["check_account_for_calls_non_db"] = array (
    'name' => 'check_account_for_calls_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_SELECT_TARGET',
    'reportable' =>true,
    'source' => 'non-db',
);
?>