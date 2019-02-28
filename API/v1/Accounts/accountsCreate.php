<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$offset=$_POST['offset'];
$limit=$_POST['query_limit'];
$session_id = $_POST['session_id'];

$set_entry_parameters = array(
    //session id
    "session" => $session_id,

    //The name of the module from which to retrieve records.
    "module_name" => "Accounts",

    //Record attributes
    "name_value_list" => array(
        //to update a record, you will nee to pass in a record id as commented below
        //array("name" => "id", "value" => "9b170af9-3080-e22b-fbc1-4fea74def88f"),
        array("name" => "name", "value" => "Test Account"),
    ),
);

$set_entry_result = call("set_entry", $set_entry_parameters, $url);

echo "<pre>";
print_r($set_entry_result);
echo "</pre>";

?>