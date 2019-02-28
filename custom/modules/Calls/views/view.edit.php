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


require_once('include/json_config.php');

class CallsViewEdit extends ViewEdit
{
    
  	/**    public function __construct() {
       parent::ViewEdit();
       $this->useForSubpanel = true; // this variable specifies that these changes should work for subpanel
        $this->useModuleQuickCreateTemplate = true; // quick create template too
    }

 	 * @see SugarView::preDisplay()
 	 */
 	public function preDisplay()
 	{
 		if($_REQUEST['module'] != 'Calls' && isset($_REQUEST['status']) && empty($_REQUEST['status'])) {
	       $this->bean->status = '';
 		} //if
        if(!empty($_REQUEST['status']) && ($_REQUEST['status'] == 'Held')) {
	       $this->bean->status = 'Held';
 		}
		//assign contact information to calls beans
		if(!empty($_REQUEST['return_module']) && ($_REQUEST['return_module']=='Contacts')) {
			$this->bean->parent_type = 'Contacts';
			$this->bean->parent_id=$_REQUEST['record'];
			$this->bean->contact_id=$_REQUEST['record'];
		}

 		parent::preDisplay();

 	}

 	/**
 	 * @see SugarView::display()
 	 */
 	public function display()
 	{
		global $current_user;
		$selectedProductsIdArr = array();
		$productsNameArr = array();
		$productsIdArr = array();
		if(isset($this->bean->id) && ($this->bean->parent_type=='Accounts')){
			$this->bean->load_relationship('accounts');
			foreach ($this->bean->accounts->getBeans() as $aSelectedAccount){
				$aSelectedAccount->load_relationship('contacts');
				foreach ($aSelectedAccount->contacts->getBeans() as $aAssignedAccountContacts){

					$assignedAccountContactsId[]=$aAssignedAccountContacts->id;
					$assignedAccountContactsName[]=$aAssignedAccountContacts->name;
				}
			}
			$this->bean->load_relationship('contacts');
			foreach ($this->bean->contacts->getBeans() as $aSelectedContacts){
				$selectedContactsId[]=$aSelectedContacts->id;

			}
			$this->ss->assign('selectedContactsId',$selectedContactsId);
			$this->ss->assign('free','1');
			$this->ss->assign('assignedAccountContactsId',$assignedAccountContactsId);
			$this->ss->assign('assignedAccountContactsName',$assignedAccountContactsName);
		}


		//check if id is not empty to handle checked product editView
		if(isset($this->bean->id)  ){
			$sql = "SELECT calls_aos_products_1_c.calls_aos_products_1aos_products_idb  as products";
			$sql .= " FROM calls_aos_products_1_c";
			$sql .= " where deleted='0' and calls_aos_products_1_c.calls_aos_products_1calls_ida='" . $this->bean->id. "'";
			$sql .= "order by calls_aos_products_1_c.priority ASC";
			$result = $this->bean->db->query($sql);
			while ($row = $this->bean->db->fetchByAssoc($result)) {
				$selectedProductsIdArr[]=$row['products'];
			}
            $sqlforKey = "SELECT *";
            $sqlforKey .= " FROM calls_thin_key_messages_1_c";
            $sqlforKey .= " where deleted='0' and calls_thin_key_messages_1calls_ida='" . $this->bean->id. "'";
            $resultKey = $this->bean->db->query($sqlforKey);
            while ($rowKey = $this->bean->db->fetchByAssoc($resultKey)) {
                $selectedkeyMessages[]=$rowKey['calls_thin_key_messages_1thin_key_messages_idb'];
                $selectedReaction[$rowKey['calls_thin_key_messages_1thin_key_messages_idb']]=$rowKey['reaction'];
            }

			foreach ($this->bean->get_linked_beans('calls_thin_sample_lot_1', '', 'name ASC') as $aSampleLot){
				$sql = "SELECT calls_thin_sample_lot_1_c.quantity as quantity";
				$sql .= " FROM calls_thin_sample_lot_1_c";
				$sql .= " where deleted='0' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1thin_sample_lot_idb='" . $aSampleLot->id . "' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1calls_ida='" . $this->bean->id . "'";
				$result = $this->bean->db->query($sql);
				while ($row = $this->bean->db->fetchByAssoc($result)) {
					$selectedSamplesId[$aSampleLot->id]=$aSampleLot->aos_products_thin_sample_lot_1aos_products_ida;
					$selectedSamplesLotId[$aSampleLot->id]=$aSampleLot->id;
					$selectedSamplesLotQuantity[$aSampleLot->id]=$row['quantity'];
				}
				foreach ($aSampleLot->get_linked_beans('aos_products_thin_sample_lot_1', '', 'name ASC') as $aSampleLotlist){
					foreach ($aSampleLotlist->get_linked_beans('aos_products_thin_sample_lot_1', '', 'name ASC') as $aSampleLotlist1){
						$allAssignedSamples[$aSampleLot->aos_products_thin_sample_lot_1aos_products_ida][$aSampleLotlist1->id]=$aSampleLotlist1->name;
					}
				}
			}
            $this->ss->assign('keyMessages',$selectedkeyMessages);
            $this->ss->assign('reaction',$selectedReaction);
			//assign checked  sample,samples lot and sample lot quantity ids to smarty vars to handle result display in editviewdefs with samples.tpl
			$this->ss->assign('samplesLotId',$allAssignedSamples);
			$this->ss->assign('selectedSamplesId',$selectedSamplesId);
			$this->ss->assign('selectedSamplesLotId',$selectedSamplesLotId);
			$this->ss->assign('selectedSamplesLotQuantity',$selectedSamplesLotQuantity);

			//assign checked  product id to smarty vars to handle result display in editviewdefs with produtcs.tpl
			$this->ss->assign('checkedProductId',$selectedProductsIdArr);
			$this->ss->assign('call_location_id',$this->bean->call_location_c);
		}
		//get assigned product to authenticated user
		foreach ($current_user->get_linked_beans('aos_products_users_1','','name ASC') as $aProduct) {
			$productsNameArr[] = $aProduct->name;
			$productsIdArr[] = $aProduct->id;
			foreach ($aProduct->get_linked_beans('aos_products_aos_products_1','','name ASC') as $aSample) {
				$samplesLotName[$aSample->aos_products_aos_products_1_name][$aSample->id]=$aSample->name;
				//get assigned samplesLot to authenticated user
				foreach ($aSample->get_linked_beans('aos_products_thin_sample_lot_1', '', 'name ASC') as $aSampleLot) {
					$sampleLotParentSample[]=$aSampleLot->aos_products_thin_sample_lot_1aos_products_ida;

				}
			}
		}
		$this->ss->assign('samplesLotName',$samplesLotName);


		//assign assigned product, product id and number of cols with smarty vars to handle display in editwiewdefs with produt.tpl
		$this->ss->assign('cols',6);
		$this->ss->assign('assignedProductName',$productsNameArr );
		$this->ss->assign('assignedProductId',$productsIdArr );

 		global $json;
        $json = getJSONobj();
        $json_config = new json_config();
		if (isset($this->bean->json_id) && !empty ($this->bean->json_id)) {
			$javascript = $json_config->get_static_json_server(false, true, 'Calls', $this->bean->json_id);

		} else {
			$this->bean->json_id = $this->bean->id;
			$javascript = $json_config->get_static_json_server(false, true, 'Calls', $this->bean->id);

		}
 		$this->ss->assign('JSON_CONFIG_JAVASCRIPT', $javascript);

		$this->ss->assign('remindersData', Reminder::loadRemindersData('Calls', $this->bean->id, $this->ev->isDuplicate));
		$this->ss->assign('remindersDataJson', Reminder::loadRemindersDataJson('Calls', $this->bean->id, $this->ev->isDuplicate));
		$this->ss->assign('remindersDefaultValuesDataJson', Reminder::loadRemindersDefaultValuesDataJson());
		$this->ss->assign('remindersDisabled', json_encode(false));


 		if($this->ev->isDuplicate){
	        $this->bean->status = $this->bean->getDefaultStatus();
 		}
		if ($this->bean->status == "Held"){
			unset($this->ev->defs['templateMeta']['form']['buttons']['0']);
			unset($this->ev->defs['templateMeta']['form']['buttons']['1']);
			unset($this->ev->defs['templateMeta']['form']['buttons']['3']);
			unset($this->ev->defs['templateMeta']['form']['buttons']['4']);
		}
		$sd='cache/themes/'.$GLOBALS['theme'].'/modules/' . $this->bean->module_dir . '/EditView.tpl';
		if(file_exists('cache/themes/'.$GLOBALS['theme'].'/modules/' . $this->bean->module_dir . '/EditView.tpl'))
			unlink('cache/themes/'.$GLOBALS['theme'].'/modules/' . $this->bean->module_dir . '/EditView.tpl');
	/***********************************		
			        global $mod_strings;
        //JS to make field mendatory 
        $jsscript = <<<EOQ
                   <script>
       
                      $('#call_type_c').bind('change', function(obj) {
        showHideAccompanying();
         console.log('EditView1');
    });
                function showHideAccompanying()
                     {
                        var type = $('#call_type_c').val();
                         if(type =='accompanied_call'){ 
                         console.log('debut')
                               addToValidate('EditView','accompanying_c','relate',true,'{$mod_strings['LBL_ACCOMPANYING']}');    // mark Description field required
                                $('#description_label').html('{$mod_strings['LBL_ACCOMPANYING']}: <font color="red">*</font>'); // with red * sign next to label
                               $("#accompanying_c_label").parent().show();
                                console.log('selected');
                            }
                            else{
                                removeFromValidate('EditView','accompanying_c');                        // else remove the validtion applied
                                $('#description_label').html('{$mod_strings['LBL_ACCOMPANYING']}'); // and give the normal label back 
                                $("#accompanying_c_label").parent().hide();
                            }
                    }
                 
                    showHideAccompanying(); //Call at onload while editing a Published blog record
                     
                </script>
EOQ;
	***********************************/
			if($this->bean->status=='Held'){
			    echo "Vous ne pouvez pas modifié une visite réalisée";
			}
			else{
			    	parent::display();
			}
 	
echo $jsscript;
		//disable prent_type, parent_name and button from call EditView
		if((!empty($_REQUEST['return_module']) && ($_REQUEST['return_module']=='Contacts')) || !empty($this->bean->id)) {
			echo " <script language='javascript'>
						 YAHOO.util.Event.onDOMReady(function () {
							document.getElementById('parent_type').disabled = true
							document.getElementById('parent_name').disabled = true
							document.getElementById('btn_parent_name').disabled = true
							document.getElementById('btn_clr_parent_name').disabled = true
							document.getElementById('parent_name').readOnly = true
						});
 					</script>";
	}
		echo " <script language='javascript'>
						 YAHOO.util.Event.onDOMReady(function(){
							var event = new Event('change');
							document.getElementById('parent_id').dispatchEvent(event);
						});
 					</script>";
 	}
}
