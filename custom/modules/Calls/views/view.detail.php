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

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class CallsViewDetail extends ViewDetail
{

	public function preDisplay()
	{

		parent::preDisplay();

	}
 	/**
 	 * @see SugarView::display()
 	 */
 	public function display() 
 	{
		/*$this->bean->load_relationship('calls_thin_sample_lot_1','','');
		foreach ($this->bean->get_linked_beans('calls_thin_sample_lot_1','','') as $aSampleLot) {
			$sql = "SELECT calls_thin_sample_lot_1_c.quantity as quantity";
			$sql .= " FROM calls_thin_sample_lot_1_c";
			$sql .= " where deleted='0' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1thin_sample_lot_idb='" . $aSampleLot->id . "' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1calls_ida='" . $this->bean->id . "'";
			$result = $this->bean->db->query($sql);
			while ($row = $this->bean->db->fetchByAssoc($result)) {
				$sampleLotArr[] = array('name'=>$aSampleLot->name,'sampleName'=>$aSampleLot->aos_products_thin_sample_lot_1_name,'quantity'=>''.$row['quantity']);

			}

	}
		$this->ss->assign('sampleInfo',$sampleLotArr );*/
		/*foreach ($this->bean->get_linked_beans(			'calls_aos_products_1','','priority ASC') as $aProduct) {

		$productsNameArr[] = $aProduct->name;
		}
		//assign checked product name to smarty vars to handle result display in editviewdefs with produtcsDetailView.tpl
		$this->ss->assign('assignedProductName',$productsNameArr );*/
		$javascript_script=<<<EOQ
  <script>
  $(document).ready(function() {
  $("#detail_header_action_menu").remove();
  });
  </script>
EOQ;

		$hide_call_location=<<<EOQ
  <script>
  $(document).ready(function() {
  $("#call_location_name_c").closest('tr').remove();
  });
  </script>
EOQ;
		$hide_accompanying=<<<EOQ
  <script>
  $(document).ready(function() {
  $("#user_id_c").closest('tr').remove();
  });
  </script>
EOQ;


if($this->bean->status=="Held" || $this->bean->status=="PlannedHeld"){
 echo $javascript_script;


}

if($this->bean->parent_type=="Accounts"){
    echo $hide_call_location;
}
if($this->bean->call_type_c!=="accompanied_call"){
    echo $hide_accompanying;
}
 parent::display();

}







 	}

