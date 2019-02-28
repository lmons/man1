<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class AfterRelationshipAdd
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * fill Primary Address field in Contact module
     */
    function AssignAddressToContact($bean, $event, $arguments){
        if ($arguments['related_module']=='Contacts'){
           $newContactBean=$arguments['related_bean'];
            $newContactBean->address_c=$bean->jjwg_maps_address_c;
            $newContactBean->brick_c=$bean->brick_c;
            $newContactBean->city_c=$bean->city_c;
            $newContactBean->Save();
        }

    }
}
