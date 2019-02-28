<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$firstHour="07:30:00";
$date = new DateTime($_POST['date']." ".$firstHour);
$date->format('Y-m-d H:i:s');
global $db;
global $current_user;
$jsonContact=json_decode(htmlspecialchars_decode ($_POST['selected_contacts']));
    foreach($jsonContact as $k => $obj) {
        $callsContactsQuery='';
        $callsUsersQuery='';
        $date->modify('+30 minutes');
        $dateStart= $date->format('Y-m-d H:i:s');
        $focus = new Call();
        $focus->name = $obj->name;
        $focus->parent_type = "Contacts";
        $focus->call_type_c = "face_to_face";
        $focus->parent_id = $obj->idContact;
        $focus->duration_minutes="30";
        $focus->date_start=$dateStart;
        $focus->contact_id=$obj->idContact;
        $focus->assigned_user_id=$current_user->id;
        $focus->save();
        $callId=$focus->id;
        $callsContactsQuery.="insert into ".$focus->rel_contacts_table."(id,call_id,contact_id) VALUES ('".create_guid()."','".$callId."','".$obj->idContact."');";
        $callsUsersQuery.="insert into ".$focus->rel_users_table."(id,call_id,user_id) VALUES ('".create_guid()."','".$callId."','".$current_user->id."');";
        $db->query($callsContactsQuery);
        $db->query($callsUsersQuery);
        /*$cyclePlanTarget = new Thin_CyclePlanTargets();
        $cyclePlanTarget->retrieve($obj->idTarget);
        $cyclePlanTarget->submitted_calls=$cyclePlanTarget->submitted_calls+1;
        $cyclePlanTarget->save();*/
    }
$header_URL = "Location: index.php?action={$_REQUEST['return_action']}&module={$_REQUEST['return_module']}&record={$_REQUEST['return_id']}";
$GLOBALS['log']->debug("about to post header URL of: $header_URL");

header($header_URL);

?>