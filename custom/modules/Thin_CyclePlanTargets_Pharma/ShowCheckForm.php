<?php
class ShowCheckForm{
    /**
     * function to load contact information to cycle plan targets
     **/
    function ShowCheckForm($bean, $event, $args){
        $idTargets= $bean->id;
        $bean->load_relationship('accounts_thin_cycleplantargets_pharma_1');
        $checkTarget='';
        foreach($bean->accounts_thin_cycleplantargets_pharma_1->getBeans() as $iAccounts => $oAccount)
        {
            //add checkbox to subpanel to plan mass account calls
            $checkTarget .="<input type='checkbox' onclick=getCheckedAccountsTargets('".$oAccount->id."','".$idTargets."') id='".$oAccount->id."' value='".$oAccount->name."'>";

        }
        $bean->check_account_for_calls_non_db=$checkTarget;

    }
}