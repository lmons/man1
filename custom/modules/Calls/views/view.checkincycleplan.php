<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

require_once('include/MVC/View/SugarView.php');

class CallsViewCheckInCyclePlan extends SugarView
{

    function display()
    {

        global $current_user;
        $assigned_user=$current_user->id;
        $callModule=$_REQUEST['callModule'];
        $startDate=$_REQUEST['startDate'];
        $parentId=$_REQUEST['parentId'];
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();

if($callModule=='Accounts' && ($configuratorObj->config['realisation']['enable_restriction_cp_submit'])) {
echo $this->checkIfAccountInCyclePlan($parentId,$startDate,$assigned_user);
}
elseif($callModule=='Contacts' && ($configuratorObj->config['realisation']['enable_restriction_cp_submit'])) {

    echo $this->checkIfcontactInCyclePlan();

}
        else echo 'true';
        parent::display();
    }


    function checkIfAccountInCyclePlan($accountId,$dateStart,$assignedUser){
        $startDate = date('d/m/y');
        $endDate = date();

        $timedate = new TimeDate();

// Y-m-d H:i:s
        $db_format = $timedate->get_db_date_format();
        $bool='false';
        $Accounts = new Account();
        //get the contacts bean
       $account=$Accounts->retrieve($accountId);
        if($account!=null){

        //load related cycle plan targets
        $Accounts->load_relationship('accounts_thin_cycleplantargets_pharma_1');

        $assignedUserParam = array(
            'where' => array(
                'lhs_field' => 'assigned_user_id',
                'operator' => '=',
                'rhs_value' => $assignedUser,
            ),
        );
        $activeCyclePlanParam = array(
            'where' => array(
                'lhs_field' => 'active',
                'operator' => '=',
                'rhs_value' => '1',
            ),
        );
        foreach ($Accounts->accounts_thin_cycleplantargets_pharma_1->getBeans($assignedUserParam) as $iTargets => $oTarget) {
                //load related cycle plan
                $oTarget->load_relationship('thin_cycleplans_thin_cycleplantargets_pharma_1');
                foreach ($oTarget->thin_cycleplans_thin_cycleplantargets_pharma_1->getBeans($activeCyclePlanParam) as $iCyclePlans => $oCyclePlan) {
                    if (strtotime($dateStart) >= strtotime($oCyclePlan->start_date) && strtotime($dateStart) <= strtotime($oCyclePlan->end_date)) {
                        $bool = 'true';
                    }
                }
            }
        }
        return $bool;

    }

    function checkIfContactInCyclePlan($contactId,$dateStart,$assignedUser){
$bool='false';
        $Contacts = new Contact();
        //get the contacts bean
        $contact=$Contacts->retrieve($contactId);
        if($contact!=null) {
            //load related cycle plan targets
            $Contacts->load_relationship('thin_cycleplantargets_contacts');

            $assignedUserParam = array(
                'where' => array(
                    'lhs_field' => 'assigned_user_id',
                    'operator' => '=',
                    'rhs_value' => $assignedUser,
                ),
            );
            $activeCyclePlanParam = array(
                'where' => array(
                    'lhs_field' => 'active',
                    'operator' => '=',
                    'rhs_value' => '1',
                ),
            );
            foreach ($Contacts->thin_cycleplantargets_contacts->getBeans($assignedUserParam) as $iTargets => $oTarget) {
                    $oTarget->load_relationship('thin_cycleplans_thin_cycleplantargets');
                    foreach ($oTarget->thin_cycleplans_thin_cycleplantargets->getBeans($activeCyclePlanParam) as $iCyclePlans => $oCyclePlan) {
                        if (strtotime($dateStart) >= strtotime($oCyclePlan->start_date) && strtotime($dateStart) <= strtotime($oCyclePlan->end_date)) {
                            $bool = 'true';
                        }
                    }
                }
            }

        return $bool;
    }

}
