<?php
 // created: 2017-01-04 15:07:30
$layout_defs["Thin_CyclePlans"]["subpanel_setup"]['thin_cycleplans_thin_cycleplantargets'] = array (
  'order' => 100,
  'module' => 'Thin_CyclePlanTargets',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
  'get_subpanel_data' => 'thin_cycleplans_thin_cycleplantargets',
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
