<?php
 // created: 2016-12-27 16:50:16
$layout_defs["Contacts"]["subpanel_setup"]['thin_cycle_plan_targets_contacts'] = array (
  'order' => 100,
  'module' => 'Thin_CyclePlanTargets',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_THIN_CYCLE_PLAN_TARGETS_CONTACTS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
  'get_subpanel_data' => 'thin_cycle_plan_targets_contacts',
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
