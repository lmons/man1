<?php

if (!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class CyclePlanTargetsHook
{
    /**
     * function to set name from cycle plan targets id
     **/
    function setCptNameFromId($bean, $event, $arguments)
    {
        if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) {
            if (empty($bean->name)) {
                $bean->ignore_update_c = true;
                $bean->name = "CPT-" . $bean->id;
                $bean->save();
            }
        }
    }



}

?>