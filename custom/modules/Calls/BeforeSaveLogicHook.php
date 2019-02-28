<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class BeforeSaveLogicHook
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * fill subject field in call module
     */
    function setCallSubject($bean, $event, $arguments)
    {
        global $app_strings;
        //check if subject is empty
        if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
        if (empty($bean->name) && $_REQUEST['relate_to'] == 'Contacts') {
            $Contacts = new Contact();
            $Contacts->retrieve($_REQUEST['relate_id']);
            //fill the subject name
            $bean->parent_type = 'Contacts';
            $bean->parent_id = $_REQUEST['relate_id'];
            $bean->contact_id = $_REQUEST['relate_id'];
            //TODO: stock the string value in modString and use his key to get the string in different language
          //  $bean->name = "Call for " . $Contacts->name;
        } elseif (empty($bean->name) && $bean->parent_type == 'Contacts') {
            $bean->name = $app_strings['LBL_PRO_SAL'] . $bean->parent_name;
        } elseif (empty($bean->name) && $bean->parent_type == 'Accounts') {
            $bean->name = $app_strings['LBL_PHARMA_SAL']  . $bean->parent_name;
        } elseif (empty($bean->name) && $_REQUEST['relate_to'] == 'Accounts') {
            $Accounts = new Accounts();
            $Accounts->retrieve($_REQUEST['relate_id']);
            //fill the subject name
            $bean->ignore_update_c = true;
            $bean->parent_type = 'Accounts';
            $bean->parent_id = $_REQUEST['relate_id'];
            $bean->account_id = $_REQUEST['relate_id'];
            //TODO: stock the string value in modString and use his key to get the string in different language
            $bean->name = "Call for " . $Accounts->name;
            $bean->save();
        }

    }
    }

    /** function to check if the contacts is in the cycle plan target of the connected user then add 1 to submitted_calls for the active cycle plan
     * @param $bean calls record beans
     * @param $event
     * @param $arguments
     *
     */
    function setSubmittedCalls($bean, $event, $arguments)
    {
        global $current_user;

        if (($bean->status == 'Held' || $bean->status == 'PlannedHeld') && ($bean->parent_type == 'Contacts')) {
            $Contacts = new Contact();
            //get the contacts bean
            $Contacts->retrieve($bean->parent_id);
            //load related cycle plan targets
            $Contacts->load_relationship('thin_cycleplantargets_contacts');

            foreach ($Contacts->thin_cycleplantargets_contacts->getBeans() as $iTargets => $oTarget) {
                //check if cycle plan targets has assigned user as current user(connected user)
                if ($oTarget->assigned_user_id == $current_user->id) {
                    //load related cycle plan
                    $oTarget->load_relationship('thin_cycleplans_thin_cycleplantargets');
                    foreach ($oTarget->thin_cycleplans_thin_cycleplantargets->getBeans() as $iCyclePlans => $oCyclePlan) {
                        //preventing Infinite Loops with Logic Hooks in a scenario that triggers the same hook again
                        if (!isset($oTarget->ignore_update_c) || $oTarget->ignore_update_c === false) {
                            //check the active cycle plan
                            if ($oCyclePlan->active != '0') {
                                $oTarget->ignore_update_c = true;
                                //change submitted calls field in cycle plan target
                                $oTarget->submitted_calls = $oTarget->submitted_calls + 1;
                                $oTarget->save();
                            }
                        }
                    }
                }

            }
        } else if (($bean->status == 'Held' || $bean->status == 'PlannedHeld') && ($bean->parent_type == 'Accounts')) {
            $Accounts = new Account();
            //get the contacts bean
            $Accounts->retrieve($bean->parent_id);
            //load related cycle plan targets
            $Accounts->load_relationship('accounts_thin_cycleplantargets_1');

            foreach ($Accounts->accounts_thin_cycleplantargets_1->getBeans() as $iTargets => $oTarget) {
                //check if cycle plan targets has assigned user as current user(connected user)
                if ($oTarget->assigned_user_id == $current_user->id) {
                    //load related cycle plan
                    $oTarget->load_relationship('thin_cycleplans_thin_cycleplantargets');
                    foreach ($oTarget->thin_cycleplans_thin_cycleplantargets->getBeans() as $iCyclePlans => $oCyclePlan) {
                        //preventing Infinite Loops with Logic Hooks in a scenario that triggers the same hook again
                        if (!isset($oTarget->ignore_update_c) || $oTarget->ignore_update_c === false) {
                            //check the active cycle plan
                            if ($oCyclePlan->active != '0') {
                                $oTarget->ignore_update_c = true;
                                //change submitted calls field in cycle plan target
                                $oTarget->submitted_calls = $oTarget->submitted_calls + 1;
                                $oTarget->save();
                            }
                        }
                    }
                }

            }
        }
    }

    /** function to  set call location name from call location to resolve dropdownlist value in details view
     * @param $bean
     * @param $event
     * @param $args
     */
    function setCallLocationName($bean, $event, $args)
    {
        if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
            $account = new Account();
            $account->retrieve($bean->call_location_c);
            $bean->ignore_update_c = true;
            $bean->call_location_name_c = $account->name;
            $bean->save();
        }
    }

    /** function to insert and update selected product with created call
     * @param $bean
     * @param $event
     * @param $args
     */
    function insertPresentedProductAndSamples($bean, $event, $args)
    {
        global $db;

        if (isset($_REQUEST['sample-name'])) {
            $deleteCallsSamplesQuery = "update calls_thin_sample_lot_1_c set deleted='1' where calls_thin_sample_lot_1calls_ida='" . $bean->id . "'";
            $bean->db->query($deleteCallsSamplesQuery);
            for ($i = 0; $i < sizeof($_REQUEST['sample-name']); $i++) {


                $callsSamplesQuery = "insert into calls_thin_sample_lot_1_c (id,calls_thin_sample_lot_1calls_ida,calls_thin_sample_lot_1thin_sample_lot_idb,quantity) VALUES ('" . create_guid() . "','" . $bean->id . "','" . $_REQUEST['sample-lot'][$i] . "','" . $_REQUEST['sample-lot-quantity'][$i] . "');";
                $bean->db->query($callsSamplesQuery);
            }
            unset($_REQUEST['sample-name']);
        }


        //insert products
        if (isset($_REQUEST['products'])) {
            $deleteCallsContactsQuery = "update calls_aos_products_1_c set deleted='1' where calls_aos_products_1calls_ida='" . $bean->id . "'";
            $bean->db->query($deleteCallsContactsQuery);
            $productData = (json_decode(html_entity_decode($_REQUEST['products'])));
            foreach ($productData as $k => $obj) {
                $callsContactsQuery = "insert into calls_aos_products_1_c (id,calls_aos_products_1calls_ida,calls_aos_products_1aos_products_idb,priority) VALUES ('" . create_guid() . "','" . $bean->id . "','" . $obj . "','" . ($k + 1) . "');";
                $bean->db->query($callsContactsQuery);
            }
            unset($_REQUEST['products']);
        }
        if (isset($_REQUEST['key-messages-reaction'])) {
            $deleteCallskeyMessageQuery = "update calls_thin_key_messages_1_c set deleted='1' where calls_thin_key_messages_1calls_ida='" . $bean->id . "'";
            $bean->db->query($deleteCallskeyMessageQuery);
            $keyMessageData = (json_decode(html_entity_decode($_REQUEST['key-messages-reaction'])));
            foreach ($keyMessageData as $k1 => $obj1) {
                $callskeysQuery = "insert into calls_thin_key_messages_1_c (id,calls_thin_key_messages_1calls_ida,calls_thin_key_messages_1thin_key_messages_idb,reaction) VALUES ('" . create_guid() . "','" . $bean->id . "','" . $obj1->id . "','" . $obj1->reaction . "');";
                $bean->db->query($callskeysQuery);
            }
            unset($_REQUEST['key-messages-reaction']);
        }

    }

    function insertContactsInAccount($bean, $event, $args)
    {
        global $db;

        if (isset($_REQUEST['contacts-in-account'])) {
            $deleteContactsQuery = "update calls_contacts set deleted='1' where call_id='" . $bean->id . "'";
            $bean->db->query($deleteContactsQuery);
            for ($i = 0; $i < sizeof($_REQUEST['contacts-in-account']); $i++) {


                $callsContactsAccountQuery = "insert into calls_contacts (id,call_id,contact_id) VALUES ('" . create_guid() . "','" . $bean->id . "','" . $_REQUEST['contacts-in-account'][$i] . "');";
                $bean->db->query($callsContactsAccountQuery);
            }
            unset($_REQUEST['contacts-in-account']);
        }

    }

    function setCallsStatus($bean, $event, $args)
    {
        if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
            if (isset($bean->fetched_row['id']) && ($bean->fetched_row['status'] == 'Planned' && $bean->status == 'Held')) {
                $bean->ignore_update_c = true;
                //issue with mobile i will change the status from PlannedHeld to Held
                $bean->status = 'Held';
                $bean->save();
                $contactsQuery = "update calls_contacts set deleted='0' where call_id='" . $bean->id . "'";
                $bean->db->query($contactsQuery);
            }
        }
    }
}

?>