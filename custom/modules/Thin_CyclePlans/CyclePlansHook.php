<?php

if (!defined('sugarEntry') ||!sugarEntry) die ('Not A Valid Entry Point');

class CyclePlansHook
{
    function assignUserFromTerritory($bean,$event,$arguments)
    {
      /*   $territory = new Terri_Territoire();
        $territory->retrieve($bean->terri_territoire_thin_cycleplans_1terri_territoire_ida);
              //$bean->name=$bean->terri_territoire_chara_liste_des_cibles_1terri_territoire_ida;
              $bean->assigned_user_id=$territory->assigned_user_id;
              $bean->save();*/

    }
}

?>