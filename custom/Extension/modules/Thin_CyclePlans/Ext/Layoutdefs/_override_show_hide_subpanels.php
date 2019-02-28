<?php
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