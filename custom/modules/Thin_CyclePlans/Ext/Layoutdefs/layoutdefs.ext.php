<?php 
 //WARNING: The contents of this file are auto-generated


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
    2 =>
    array (
      'widget_class' => 'SubPanelTopButtonPlanCalls',
    ),

  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['Thin_CyclePlans']['subpanel_setup']['thin_cycleplans_thin_cycleplantargets']['override_subpanel_name'] = 'Thin_CyclePlans_subpanel_thin_cycleplans_thin_cycleplantargets';


//auto-generated file DO NOT EDIT
$layout_defs['Thin_CyclePlans']['subpanel_setup']['thin_cycleplans_thin_cycleplantargets_pharma_1']['override_subpanel_name'] = 'Thin_CyclePlans_subpanel_thin_cycleplans_thin_cycleplantargets_pharma_1';


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
// If the Account Type is NOT FacilitatorCo or Venue or Caterer, we will not be displaying the Events subpanels (accounts_contacts_99 or evmgr_evs_contacts).
if ( $this->_focus->cp_type_c  ==  'Accounts')
{
    unset($layout_defs['Thin_CyclePlans']['subpanel_setup']['thin_cycleplans_thin_cycleplantargets']);
}
else{
    unset($layout_defs['Thin_CyclePlans']['subpanel_setup']['thin_cycleplans_thin_cycleplantargets_pharma_1']);
}

?>