<?php
 // created: 2017-01-03 13:42:15
$layout_defs["Thin_CyclePlans"]["subpanel_setup"]['thin_cycleplans_terri_territoire'] = array (
  'order' => 100,
  'module' => 'Terri_Territoire',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_TERRI_TERRITOIRE_TITLE',
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
