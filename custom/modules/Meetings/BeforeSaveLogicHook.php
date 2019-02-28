<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class BeforeSaveLogicHookMeeting
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * fill subject field in call module
     */
    function setDuration($bean, $event, $arguments)
    {
        global $app_list_strings;
       // $bean->name=$bean->tm_type_c;
         //$bean->save();
        if (strtolower($_REQUEST['action']) == 'index' || strtolower($_REQUEST['action']) == 'save'  || strtolower($_REQUEST['action']) =='saveactivity') {
        global $current_user;
        $firstHourAM = "00:00:00";
        $firstHourPM = "12:00:00";
        $lastHourAM = "12:00:00";
        $lastHourPM = "00:00:00";
        $bean->name=$app_list_strings["tm_type_list"][$bean->tm_type_c];
        $dateStart = new DateTime($bean->date_start);
        $dateEnd= new DateTime($bean->date_start);
        $dateStart = $dateStart->format('Y-m-d');
        $dateStart = new DateTime($dateStart." ".$firstHourAM);

        if ($bean->duration === "43200_AM") {
            if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
                $dateEnd =$dateEnd->modify("+43200 seconds");
                $dateStart = $dateStart->format('Y-m-d');
                $dateEnd = $dateEnd->format('Y-m-d');
                $dateStart = $dateStart . " " . $firstHourAM;
                $bean->duration_hours = 12;
                $bean->duration_minutes = 0;
                $bean->date_start = $dateStart;
                $bean->date_end = $dateEnd . " " . $lastHourAM;
                $bean->ignore_update_c = true;
                $bean->user_id = $current_user->id;
                $bean->save();
            }
        } else if ($bean->duration === "43200_PM") {
            if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
                $dateEnd =$dateEnd->modify("+43200 seconds");
                $dateStart = $dateStart->format('Y-m-d');
                $dateEnd = $dateEnd->format('Y-m-d');
                $dateStart = $dateStart . " " . $firstHourPM;
                $dateEnd = $dateEnd . " " . $lastHourPM;
                $bean->duration_hours = 12;
                $bean->duration_minutes = 0;
                $bean->date_start = $dateStart;
                $bean->date_end = $dateEnd;
                $bean->ignore_update_c = true;
                $bean->save();
            }
        } else {
            if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
                $dateEnd =$dateEnd->modify("+".$bean->duration." seconds");
                $dateStart = $dateStart->format('Y-m-d');
                $dateEnd = $dateEnd->format('Y-m-d');
                $dateStart = $dateStart . " " . $firstHourAM;
                $dateEnd = $dateEnd . " " . $lastHourPM;
                $bean->duration_hours = ($bean->duration / 3600);
                $bean->duration_minutes = 0;
                $bean->date_start = $dateStart;
                $bean->date_end = $dateEnd;
                $bean->ignore_update_c = true;
                $bean->save();

            }
        }
        $setUserMeeting = "update meetings_users set deleted='0' where meeting_id='" . $bean->id."'";
        $bean->db->query($setUserMeeting);

    }
    }
}


?>