<?php
// created: 2016-12-27 16:50:16
$dictionary["Thin_CyclePlanTargets"]["fields"]["thin_cycleplans_thin_cycleplantargets"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlans',
  'bean_name' => false,
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
