<?php
// created: 2017-03-21 17:42:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
    'priority_non_db' =>
        array (
            'name' => 'priority_non_db',
            'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_PRIORITY',
            'width' => '30%',
            'default' => true,
            'sortable' => false,
        ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AOS_Products',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AOS_Products',
    'width' => '5%',
    'default' => true,
  ),
);