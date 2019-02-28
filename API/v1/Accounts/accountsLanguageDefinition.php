<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$session_id = $_POST['session_id'];

$get_language_definition_parameters = array(
        //Session id
        'session' => $session_id,

        //The list of modules
        'modules' => array(
            'Accounts'
        ),
    'md5' => false,
);

$get_language_definition_result = call("get_language_definition", $get_language_definition_parameters, $url);


print_r(json_encode($get_language_definition_result));


?>