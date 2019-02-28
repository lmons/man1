<?php
// created: 2017-03-06 11:15:31
$dictionary["AOS_Products"]["fields"]["aos_products_aos_products_1"] = array (
  'name' => 'aos_products_aos_products_1',
  'type' => 'link',
  'relationship' => 'aos_products_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_L_TITLE',
  'id_name' => 'aos_products_aos_products_1aos_products_ida',
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
