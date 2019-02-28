<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AfterUiFrameHooks
{
    /**
     * load javascript to get checked contacts and put it in idContactArray
     * @param $event
     * @param $arguments
     */
    function pushCheckedContacts($event, $arguments)
    {

    }
    function countFrequencySubmittedCalls($event, $arguments)
    {
        if (!empty($_REQUEST['record'])) {
        $idCyclePlans = $_REQUEST['record'];
            $sql = "SELECT sum(thin_cycleplantargets.call_frequency_target) as number_calls,sum(thin_cycleplantargets.submitted_calls) as submitted_calls";
            $sql .= " FROM thin_cycleplantargets";
            $sql .= " INNER JOIN thin_cycleplans_thin_cycleplantargets_c ON (thin_cycleplans_thin_cycleplantargets_c.thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb=thin_cycleplantargets.id)";
            $sql .= " where thin_cycleplans_thin_cycleplantargets_c.thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida='" . $idCyclePlans . "'";
            $result = $GLOBALS['db']->query($sql);
            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
                //Use $row['number_calls'],$row['submitted_calls'] to grab the sum of call frequency and submitted calls
                $numberOfCalls = $row['number_calls'];
                $submittedCalls = $row['submitted_calls'];
            }
            //instantiate cycle plan bean to set frequency and submitted calls field
            $cyclePlans = new Thin_CyclePlans();
            $cyclePlans->retrieve($idCyclePlans);
            if(($cyclePlans->call_frequency_objective != $numberOfCalls) || ($cyclePlans->submitted_calls != $submittedCalls)){
                $cyclePlans->call_frequency_objective = $numberOfCalls;
                $cyclePlans->submitted_calls = $submittedCalls;
                $cyclePlans->save();

            }

        }
    }


}

?>