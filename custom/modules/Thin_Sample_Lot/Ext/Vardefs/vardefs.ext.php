<?php 
 //WARNING: The contents of this file are auto-generated


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



 // created: 2017-03-03 12:49:04
$dictionary['Thin_Sample_Lot']['fields']['expiration_date_c']['inline_edit']='1';
$dictionary['Thin_Sample_Lot']['fields']['expiration_date_c']['options']='date_range_search_dom';
$dictionary['Thin_Sample_Lot']['fields']['expiration_date_c']['labelValue']='Expiration Date';
$dictionary['Thin_Sample_Lot']['fields']['expiration_date_c']['enable_range_search']='1';

 

 // created: 2017-03-03 12:49:48
$dictionary['Thin_Sample_Lot']['fields']['active_c']['inline_edit']='1';
$dictionary['Thin_Sample_Lot']['fields']['active_c']['labelValue']='Active';

 

// created: 2017-03-03 12:34:08
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1"] = array (
  'name' => 'aos_products_thin_sample_lot_1',
  'type' => 'link',
  'relationship' => 'aos_products_thin_sample_lot_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_thin_sample_lot_1aos_products_ida',
);
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1_name"] = array (
  'name' => 'aos_products_thin_sample_lot_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_thin_sample_lot_1aos_products_ida',
  'link' => 'aos_products_thin_sample_lot_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1aos_products_ida"] = array (
  'name' => 'aos_products_thin_sample_lot_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_thin_sample_lot_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
);

?>