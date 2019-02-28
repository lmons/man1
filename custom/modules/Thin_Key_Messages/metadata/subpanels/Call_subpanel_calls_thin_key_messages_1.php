<?php
// created: 2018-10-03 15:37:34
$subpanel_layout['list_fields'] = array (
  'aos_products_thin_key_messages_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AOS_PRODUCTS_THIN_KEY_MESSAGES_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_THIN_KEY_MESSAGES_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aos_products_thin_key_messages_1aos_products_ida',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Thin_Key_Messages',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Thin_Key_Messages',
    'width' => '5%',
    'default' => true,
  ),
);