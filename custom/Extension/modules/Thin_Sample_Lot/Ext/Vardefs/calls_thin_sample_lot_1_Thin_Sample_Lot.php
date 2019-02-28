<?php
// created: 2017-03-10 19:21:24
$dictionary["Thin_Sample_Lot"]["fields"]["calls_thin_sample_lot_1"] = array (
  'name' => 'calls_thin_sample_lot_1',
  'type' => 'link',
  'relationship' => 'calls_thin_sample_lot_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_thin_sample_lot_1calls_ida',
);
$dictionary["Thin_Sample_Lot"]["fields"]["calls_thin_sample_lot_1_name"] = array (
  'name' => 'calls_thin_sample_lot_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_thin_sample_lot_1calls_ida',
  'link' => 'calls_thin_sample_lot_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["Thin_Sample_Lot"]["fields"]["calls_thin_sample_lot_1calls_ida"] = array (
  'name' => 'calls_thin_sample_lot_1calls_ida',
  'type' => 'link',
  'relationship' => 'calls_thin_sample_lot_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
);
$dictionary["Thin_Sample_Lot"]["fields"]["quantity_non_db"] = array (
    'name' => 'quantity_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_QUANTITY',
    'reportable' =>true,
    'source' => 'non-db'
);

