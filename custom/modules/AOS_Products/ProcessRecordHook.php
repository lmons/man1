<?php
class ProductProcessRecordHook{
    /**
     * function to load contact information to cycle plan targets
     **/
    function showPriority($bean, $event, $args){
        $sql = "SELECT calls_aos_products_1_c.priority as priority";
        $sql .= " FROM calls_aos_products_1_c";
        $sql .= " where deleted='0' and calls_aos_products_1_c.calls_aos_products_1aos_products_idb='" . $bean->id . "' and calls_aos_products_1_c.calls_aos_products_1calls_ida='" . $_REQUEST['record'] . "'";
        $result = $bean->db->query($sql);
        while ($row = $bean->db->fetchByAssoc($result)) {
            $bean->priority_non_db = $row['priority'];

        }
    }
}