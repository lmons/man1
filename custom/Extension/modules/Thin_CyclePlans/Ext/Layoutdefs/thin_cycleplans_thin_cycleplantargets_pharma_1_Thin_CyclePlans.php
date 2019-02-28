<?php
 // created: 2017-07-11 18:17:45
$layout_defs["Thin_CyclePlans"]["subpanel_setup"]['thin_cycleplans_thin_cycleplantargets_pharma_1'] = array (
  'order' => 100,
  'module' => 'Thin_CyclePlanTargets_Pharma',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_PHARMA_1_FROM_THIN_CYCLEPLANTARGETS_PHARMA_TITLE',
  'get_subpanel_data' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
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
      2 =>
          array (
              'widget_class' => 'SubPanelTopButtonPlanAccountsCalls',
          ),
  ),
);
