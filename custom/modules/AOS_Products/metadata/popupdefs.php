<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products',
    'varName' => 'AOS_Products',
    'orderBy' => 'aos_products.name',
    'whereClauses' => array (
  'name' => 'aos_products.name',
),
    'searchInputs' => array (
  1 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
),
);
