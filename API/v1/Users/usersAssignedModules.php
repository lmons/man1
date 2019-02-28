<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$userId=$_POST['user_id'];
$session_id = $_POST['session_id'];


$get_available_modules_parameters = array(
    //Session id
    "session" => $session_id,

    //Module filter. Possible values are 'default', 'mobile', 'all'.
    "filter" => 'default',
);

$get_available_modules_result = call('get_available_modules', $get_available_modules_parameters, $url);


//print_r(json_encode($get_entry_list_result));
print_r($get_available_modules_result);


