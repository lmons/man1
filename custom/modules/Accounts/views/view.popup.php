<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
include_once('modules/ACLRoles/ACLRole.php');
class CustomAccountsViewPopup extends ViewPopup{
    function preDisplay(){
        global $current_user;
        $roles=new ACLRole();

        foreach($roles->getUserRoleNames($current_user->id) as $roleName){


        if($roleName=='REP'){
            $CyclePlanTargetId="";
            $CyclePlan = new Thin_CyclePlans();
            //get the contacts bean
            foreach($CyclePlan->get_full_list("name","active='1' AND cp_type_c='Accounts' AND assigned_user_id='".$current_user->id."'") as $aCyclePlan){
                $aCyclePlan->load_relationship('thin_cycleplans_thin_cycleplantargets_pharma_1');
                foreach($aCyclePlan->thin_cycleplans_thin_cycleplantargets_pharma_1->getBeans() as $aCyclePlanTargetPharma){
                    $CyclePlanTargetId.="'".$aCyclePlanTargetPharma->accounts_thin_cycleplantargets_1accounts_ida."',";
                }
            }
            $_REQUEST['accountInTarget']=$CyclePlanTargetId;
            //$this->ss->assign('accountInTarget',$_REQUEST['accountInTarget']);
            parent::preDisplay();
        }
    }
    }


}