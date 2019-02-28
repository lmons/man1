<?php
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
