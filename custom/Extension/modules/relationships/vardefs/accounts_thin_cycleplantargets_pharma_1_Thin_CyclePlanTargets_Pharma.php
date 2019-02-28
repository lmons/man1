<?php
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
