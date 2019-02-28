<?php
class ShowContactRelatedInformations{
    /**
     * function to load contact information to cycle plan targets
     **/
    function showRelatedAccounts($bean, $event, $args){
        // fetching related contacts
        $idTargets= $bean->id;
        $bean->load_relationship('thin_cycleplantargets_contacts');
        $account = '';
        $specialty = '';
        $brick = '';
        $checkTarget='';
        foreach($bean->thin_cycleplantargets_contacts->getBeans() as $iContacts => $oContact)
        {
            //set account name
            $account .= "<a href = 'index.php?action=DetailView&module=Accounts&record=".$oContact->account_id."'>".$oContact->account_name."</a>";
            //add checkbox to subpanel to plan mass contact calls
            $checkTarget .="<input type='checkbox' onclick=getCheckedTargets('".$oContact->id."','".$idTargets."') id='".$oContact->id."' value='".$oContact->name."'>";
            $specialty .= $oContact->specialty_c;
            // fetching related accounts
            $oContact->load_relationship('accounts');
            foreach($oContact->accounts->getBeans() as $iAccounts => $oAccount)
            {
                //set brick from related account
                $brick .= $oAccount->brick_c;
            }
        }
        $bean->specialty_non_db = $specialty;
        $bean->accounts_non_db = $account;
        $bean->brick_non_db = $brick;
        $bean->check_contact_for_calls_non_db=$checkTarget;

    }
}