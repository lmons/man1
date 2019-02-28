<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$session_id = $_POST['session_id'];

$get_module_fields_parameters  = array(
    //session id
    "session" => $session_id,

    //The name of the module from which to retrieve records.
    "module_name" =>"Accounts",

    //Record attributes
    'fields' => array(),
);

$set_entry_result = call("get_module_fields",$get_module_fields_parameters , $url);

echo "<pre>";
print_r($set_entry_result);
echo "</pre>";

?>