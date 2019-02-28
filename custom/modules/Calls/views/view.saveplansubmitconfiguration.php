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
require_once('modules/Configurator/Configurator.php');

class CallsViewSavePlanSubmitConfiguration extends SugarView
{

    function display()
    {
        $boolSubmit=false;
        $boolPlan=false;
        $boolCPSubmit=false;
        $configuratorObj = new Configurator();
//Load config
        $configuratorObj->loadConfig();
//Use a specific setting
        $boolSubmit = ($_REQUEST['enable_restriction_submit'] == "on" ? true : false);

        $boolCPSubmit = ($_REQUEST['enable_restriction_cycle_plan'] == "on" ? true : false);

        $boolPlan = ($_REQUEST['enable_restriction_plan_week_or_month'] == "on" ? true : false);
        $boolPlanAdv = ($_REQUEST['enable_restriction_plan_first_days'] == "on" ? true : false);
        $configuratorObj->config['realisation'] = array('enable_restriction_submit' => $boolSubmit, 'hours' => $_REQUEST['submit_hours'],'enable_restriction_cp_submit' => $boolCPSubmit);
        $configuratorObj->config['planification'] = array('enable_restriction_plan' => $boolPlan, 'weeks' => $_REQUEST['plan_weeks'],'months' => $_REQUEST['plan_months'],'enable_restriction_plan_adv' => $boolPlanAdv, 'currentWeek' => $_REQUEST['plan_current_week'],'nextWeek' => $_REQUEST['plan_next_week']);

//Save the new setting
        $configuratorObj->saveConfig();
        $queryParams = array(
            'module' => 'Administration',
            'action' => 'index',
        );
        SugarApplication::redirect('index.php?' . http_build_query($queryParams));
        // echo $MySetting;
        parent::display();
    }
}
