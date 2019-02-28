<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*
global $db;
global $current_user;
$callsContactsQuery = '';
$callsUsersQuery = '';
$this->bean->name = "Call for " . $_REQUEST['parent_name'];
$this->bean->parent_type = $_REQUEST['parent_type'];
$this->bean->parent_id = $_REQUEST['parent_id'];
$this->bean->call_location_c = $_REQUEST['call_location_c'];
$this->bean->status = 'Held';
$this->bean->date_start = $_REQUEST['date_start'];
$this->bean->duration_hours = $_REQUEST['duration_hours'];
$this->bean->duration_minutes = $_REQUEST['duration_minutes'];
$this->bean->description = $_REQUEST['description'];
$this->bean->assigned_user_name = $_REQUEST['assigned_user_name'];
$this->bean->assigned_user_id = $_REQUEST['assigned_user_id'];
$this->bean->contact_id = $_REQUEST['parent_id'];
$this->bean->save();

$callId = $this->bean->id;
$callsContactsQuery .= "insert into " . $this->bean->rel_contacts_table . "(id,call_id,contact_id) VALUES ('" . create_guid() . "','" . $callId . "','" . $_REQUEST['parent_id'] . "');";
$callsUsersQuery .= "insert into " . $this->bean->rel_users_table . "(id,call_id,user_id) VALUES ('" . create_guid() . "','" . $callId . "','" . $current_user->id . "');";
$db->query($callsContactsQuery);
$db->query($callsUsersQuery);

$header_URL = "Location: index.php?action={$_REQUEST['return_action']}&module={$_REQUEST['return_module']}&record={$callId}";
$GLOBALS['log']->debug("about to post header URL of: $header_URL");

header($header_URL);*/

?>