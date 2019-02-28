<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-02-20 15:08:30
$dictionary["AOS_Products"]["fields"]["calls_aos_products_1"] = array (
  'name' => 'calls_aos_products_1',
  'type' => 'link',
  'relationship' => 'calls_aos_products_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_AOS_PRODUCTS_1_FROM_CALLS_TITLE',
);
$dictionary["AOS_Products"]["fields"]["priority_non_db"] = array (
    'name' => 'priority_non_db',
    'type' => 'varchar',
    'default'=> '',
    'vname' => 'LBL_CALLS_THIN_AOS_PRODUCT_PRIORITY',
    'reportable' =>true,
    'source' => 'non-db'
);


// created: 2017-03-03 12:34:08
$dictionary["AOS_Products"]["fields"]["aos_products_thin_sample_lot_1"] = array (
  'name' => 'aos_products_thin_sample_lot_1',
  'type' => 'link',
  'relationship' => 'aos_products_thin_sample_lot_1',
  'source' => 'non-db',
  'module' => 'Thin_Sample_Lot',
  'bean_name' => 'Thin_Sample_Lot',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
);


// created: 2017-02-21 19:55:18
$dictionary["AOS_Products"]["fields"]["aos_products_users_1"] = array (
  'name' => 'aos_products_users_1',
  'type' => 'link',
  'relationship' => 'aos_products_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_AOS_PRODUCTS_USERS_1_FROM_USERS_TITLE',
);


// created: 2017-03-06 11:15:31
$dictionary["AOS_Products"]["fields"]["aos_products_aos_products_1"]=array (
  'name' => 'aos_products_aos_products_1',
  'type' => 'link',
  'relationship' => 'aos_products_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_L_TITLE',
  'id_name' => 'aos_products_aos_products_1aos_products_ida',
  'side' => 'left',
);
$dictionary["AOS_Products"]["fields"]["aos_products_aos_products_1_name"] = array (
  'name' => 'aos_products_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_L_TITLE',
  'save' => true,
  'id_name' => 'aos_products_aos_products_1aos_products_ida',
  'link' => 'aos_products_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["aos_products_aos_products_1aos_products_ida"] = array (
  'name' => 'aos_products_aos_products_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_R_TITLE',
);


// created: 2018-08-28 11:44:34
$dictionary["AOS_Products"]["fields"]["aos_products_thin_key_messages_1"] = array (
  'name' => 'aos_products_thin_key_messages_1',
  'type' => 'link',
  'relationship' => 'aos_products_thin_key_messages_1',
  'source' => 'non-db',
  'module' => 'Thin_Key_Messages',
  'bean_name' => 'Thin_Key_Messages',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_KEY_MESSAGES_1_FROM_THIN_KEY_MESSAGES_TITLE',
);

?>