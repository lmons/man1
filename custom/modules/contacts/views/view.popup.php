<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
include_once('modules/ACLRoles/ACLRole.php');
class CustomContactsViewPopup extends ViewPopup{
    function preDisplay(){
        global $current_user;
        $roles=new ACLRole();

        foreach($roles->getUserRoleNames($current_user->id) as $roleName){


        if($roleName=='REP'){
            $CyclePlanTargetId="";
            $CyclePlan = new Thin_CyclePlans();
            //get the contacts bean
            $CyclePlan->get_full_list("name","active='1' AND cp_type_c='Contacts' AND assigned_user_id='".$current_user->id."'");
            foreach($CyclePlan->get_full_list("name","active='1' AND cp_type_c='Contacts' AND assigned_user_id='".$current_user->id."'") as $aCyclePlan){
                $aCyclePlan->load_relationship('thin_cycleplans_thin_cycleplantargets');
                foreach($aCyclePlan->thin_cycleplans_thin_cycleplantargets->getBeans() as $aCyclePlanTarget){
                    $CyclePlanTargetId.="'".$aCyclePlanTarget->thin_cycleplantargets_contactscontacts_ida."',";
                }
            }
            $_REQUEST['contactInTarget']=$CyclePlanTargetId;
            //$this->ss->assign('contactInTarget',$_REQUEST['contactInTarget']);
            parent::preDisplay();
        }
    }
    }


}