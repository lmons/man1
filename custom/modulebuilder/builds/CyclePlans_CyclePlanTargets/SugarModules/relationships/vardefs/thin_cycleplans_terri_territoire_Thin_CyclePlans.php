<?php
// created: 2017-01-04 13:31:44
$dictionary["Thin_CyclePlans"]["fields"]["thin_cycleplans_terri_territoire"] = array (
  'name' => 'thin_cycleplans_terri_territoire',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_terri_territoire',
  'source' => 'non-db',
  'module' => 'Terri_Territoire',
  'bean_name' => 'Terri_Territoire',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_TERRI_TERRITOIRE_TITLE',
  'id_name' => 'thin_cycleplans_terri_territoireterri_territoire_ida',
);
$dictionary["Thin_CyclePlans"]["fields"]["thin_cycleplans_terri_territoire_name"] = array (
  'name' => 'thin_cycleplans_terri_territoire_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_TERRI_TERRITOIRE_TITLE',
  'save' => true,
  'id_name' => 'thin_cycleplans_terri_territoireterri_territoire_ida',
  'link' => 'thin_cycleplans_terri_territoire',
  'table' => 'terri_territoire',
  'module' => 'Terri_Territoire',
  'rname' => 'name',
);
$dictionary["Thin_CyclePlans"]["fields"]["thin_cycleplans_terri_territoireterri_territoire_ida"] = array (
  'name' => 'thin_cycleplans_terri_territoireterri_territoire_ida',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_terri_territoire',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_THIN_CYCLEPLANS_TITLE',
);
