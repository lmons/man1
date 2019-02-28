<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-28 11:52:11
$dictionary["Thin_Key_Messages"]["fields"]["calls_thin_key_messages_1"] = array (
  'name' => 'calls_thin_key_messages_1',
  'type' => 'link',
  'relationship' => 'calls_thin_key_messages_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_THIN_KEY_MESSAGES_1_FROM_CALLS_TITLE',
);


// created: 2018-08-28 11:44:34
$dictionary["Thin_Key_Messages"]["fields"]["aos_products_thin_key_messages_1"] = array (
  'name' => 'aos_products_thin_key_messages_1',
  'type' => 'link',
  'relationship' => 'aos_products_thin_key_messages_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_KEY_MESSAGES_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_thin_key_messages_1aos_products_ida',
);
$dictionary["Thin_Key_Messages"]["fields"]["aos_products_thin_key_messages_1_name"] = array (
  'name' => 'aos_products_thin_key_messages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_KEY_MESSAGES_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_thin_key_messages_1aos_products_ida',
  'link' => 'aos_products_thin_key_messages_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Thin_Key_Messages"]["fields"]["aos_products_thin_key_messages_1aos_products_ida"] = array (
  'name' => 'aos_products_thin_key_messages_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_thin_key_messages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_KEY_MESSAGES_1_FROM_THIN_KEY_MESSAGES_TITLE',
);

?>