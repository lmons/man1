<?php
class ProcessRecordHook{
    /**
     * function to load contact information to cycle plan targets
     **/
    function showQuantity($bean, $event, $args){

            $sql = "SELECT calls_thin_sample_lot_1_c.quantity as quantity";
            $sql .= " FROM calls_thin_sample_lot_1_c";
            $sql .= " where deleted='0' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1thin_sample_lot_idb='" . $bean->id . "' and calls_thin_sample_lot_1_c.calls_thin_sample_lot_1calls_ida='" . $_REQUEST['record'] . "'";
            $result = $bean->db->query($sql);
            while ($row = $bean->db->fetchByAssoc($result)) {
                $bean->quantity_non_db = $row['quantity'];

            }

        //$bean->quantity_non_db='1';
    }
}