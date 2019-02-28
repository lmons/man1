<?php
// created: 2017-01-04 15:11:31
$dictionary["Thin_CyclePlans"]["fields"]["terri_territoire_thin_cycleplans_1"] = array (
  'name' => 'terri_territoire_thin_cycleplans_1',
  'type' => 'link',
  'relationship' => 'terri_territoire_thin_cycleplans_1',
  'source' => 'non-db',
  'module' => 'Terri_Territoire',
  'bean_name' => 'Terri_Territoire',
  'vname' => 'LBL_TERRI_TERRITOIRE_THIN_CYCLEPLANS_1_FROM_TERRI_TERRITOIRE_TITLE',
  'id_name' => 'terri_territoire_thin_cycleplans_1terri_territoire_ida',
);
$dictionary["Thin_CyclePlans"]["fields"]["terri_territoire_thin_cycleplans_1_name"] = array (
  'name' => 'terri_territoire_thin_cycleplans_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TERRI_TERRITOIRE_THIN_CYCLEPLANS_1_FROM_TERRI_TERRITOIRE_TITLE',
  'save' => true,
  'id_name' => 'terri_territoire_thin_cycleplans_1terri_territoire_ida',
  'link' => 'terri_territoire_thin_cycleplans_1',
  'table' => 'terri_territoire',
  'module' => 'Terri_Territoire',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlans"]["fields"]["terri_territoire_thin_cycleplans_1terri_territoire_ida"] = array (
  'name' => 'terri_territoire_thin_cycleplans_1terri_territoire_ida',
  'type' => 'link',
  'relationship' => 'terri_territoire_thin_cycleplans_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TERRI_TERRITOIRE_THIN_CYCLEPLANS_1_FROM_THIN_CYCLEPLANS_TITLE',
);
