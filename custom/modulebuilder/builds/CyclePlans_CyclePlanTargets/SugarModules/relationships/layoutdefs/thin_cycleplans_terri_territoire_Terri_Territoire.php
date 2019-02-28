<?php
 // created: 2017-01-04 13:31:44
$layout_defs["Terri_Territoire"]["subpanel_setup"]['thin_cycleplans_terri_territoire'] = array (
  'order' => 100,
  'module' => 'Thin_CyclePlans',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_THIN_CYCLEPLANS_TITLE',
  'get_subpanel_data' => 'thin_cycleplans_terri_territoire',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
