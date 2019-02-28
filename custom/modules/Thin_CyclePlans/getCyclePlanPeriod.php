<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$period = array ();
global $current_user;
$configuratorObj = new Configurator();
$configuratorObj->loadConfig();
if($configuratorObj->config['realisation']['enable_restriction_cp_submit']){


if(!empty($_POST['selectedAccounts'])){
    $jsonAccount=json_decode(str_replace("&", '"', html_entity_decode($_POST['selectedAccounts'], ENT_QUOTES | ENT_HTML401 )));
    $cpTarget = new Thin_CyclePlanTargets_Pharma();
    $cpTarget->retrieve($jsonAccount[0]->idTarget);
    $cpTarget->load_relationship('thin_cycleplans_thin_cycleplantargets_pharma_1');
    foreach($cpTarget->thin_cycleplans_thin_cycleplantargets_pharma_1->getBeans() as $iCyclePlans => $oCyclePlans) {
        if($oCyclePlans->assigned_user_id==$current_user->id){
            $period['message']=true;
            $period['start_date']=$oCyclePlans->start_date;
            $period['end_date']=$oCyclePlans->end_date;
        }
        else{
            $period['message']=false;
        }
    }
}
elseif(!empty($_POST['selectedContacts'])){
    $jsonContact=json_decode(str_replace("&", '"', html_entity_decode($_POST['selectedContacts'], ENT_QUOTES | ENT_HTML401 )));
    $cpTarget = new Thin_CyclePlanTargets();
    $cpTarget->retrieve($jsonContact[0]->idTarget);
    $cpTarget->load_relationship('thin_cycleplans_thin_cycleplantargets');
    foreach($cpTarget->thin_cycleplans_thin_cycleplantargets->getBeans() as $iCyclePlans => $oCyclePlans) {
        if($oCyclePlans->assigned_user_id==$current_user->id){
            $period['message']=true;
        $period['start_date']=$oCyclePlans->start_date;
        $period['end_date']=$oCyclePlans->end_date;
        }
        else{
            $period['message']=false;
        }
    }

}
}else {
    $period['message']="restriction inactivated";
}
echo json_encode($period);