<?php
include_once('modules/ACLRoles/ACLRole.php');

class ListViewLogicHook {

    public function getDurationListValue($bean, $event, $arguments) {
        global $current_user;
       // $roles = getUserRoleNames($current_user->id);
       // print_r($roles);
if (strtolower($_REQUEST['action']) == 'index' || strtolower($_REQUEST['action']) == 'listview') {
           // $GLOBALS['log']->fatal("here");
            echo '<script src="custom/modules/Meetings/accept_decline.js"></script>';
        }
      

        $bean->duration=$bean->duration_hours." h";
        if($bean->status=='Planned' && $_REQUEST['my_planned_tm_team_basic']=="1"){
            $bean->tm_accept_decline='<button type="submit" href="#" id="'.$bean->id.'" onclick="return AcceptTM(this)" >Accept</button><button type="submit" href="#" id="'.$bean->id.'" onclick="return DeclineTM(this)" >Decline</button>';

        }
          }
}