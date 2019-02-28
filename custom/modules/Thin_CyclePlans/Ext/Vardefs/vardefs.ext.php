<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-07-11 18:17:45
$dictionary["Thin_CyclePlans"]["fields"]["thin_cycleplans_thin_cycleplantargets_pharma_1"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlanTargets_Pharma',
  'bean_name' => 'Thin_CyclePlanTargets_Pharma',
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANTARGETS_PHARMA_TITLE',
);


 // created: 2017-04-10 12:00:31
$dictionary['Thin_CyclePlans']['fields']['cp_type_c']['inline_edit']='1';
$dictionary['Thin_CyclePlans']['fields']['cp_type_c']['labelValue']='Cyle Plan type';

 

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


// created: 2017-01-04 15:07:30
$dictionary["Thin_CyclePlans"]["fields"]["thin_cycleplans_thin_cycleplantargets"] = array (
  'name' => 'thin_cycleplans_thin_cycleplantargets',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_thin_cycleplantargets',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlanTargets',
  'bean_name' => 'Thin_CyclePlanTargets',
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
);

?>