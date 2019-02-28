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


require_once('modules/Users/UserViewHelper.php');


class Thin_CyclePlansViewDetail extends ViewDetail {

    function preDisplay() {

        parent::preDisplay();
    }


    /**
     *
     */
    function display() {
        global $current_user, $app_list_strings;
        $submittedFrequencyObj=0;
        $numberOfCalls=0;
        $idCyclePlans=$this->bean->id;
        $sql = "SELECT thin_cycleplantargets.call_frequency_target as number_calls,thin_cycleplantargets.submitted_calls as submitted_calls";
        $sql .= " FROM thin_cycleplantargets";
        $sql .= " INNER JOIN thin_cycleplans_thin_cycleplantargets_c ON (thin_cycleplans_thin_cycleplantargets_c.thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb=thin_cycleplantargets.id)";
        $sql .= " where thin_cycleplans_thin_cycleplantargets_c.thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida='" . $idCyclePlans . "'";
        $result = $GLOBALS['db']->query($sql);
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $numberOfCalls=$numberOfCalls+1;
            //Use $row['number_calls'],$row['submitted_calls'] to grab the sum of call frequency and submitted calls
            if($row['submitted_calls']>=$row['number_calls']){
                $submittedFrequencyObj=$submittedFrequencyObj+1;
            }
        }
        $productiveFrequency=($submittedFrequencyObj/$numberOfCalls)*100;
        $leftToVisite=100-$productiveFrequency;
        echo "<script type='text/javascript'>
$(document ).ready(function() {
  $( '.myProgress' ).tooltip({
      show: {
            effect: 'explode',
        delay: 200
      },
      hide: {
            effect: 'explode',
        delay: 200
      },track: true
    });

                document.getElementById('myBar').setAttribute('title', '".$productiveFrequency."%');
                 document.getElementById('myBar').style.width='".$productiveFrequency."%';
                 document.getElementById('myProgress').setAttribute('title', '".$leftToVisite."%');
});
            </script>";
parent::display();

    }
}