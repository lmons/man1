<?php
require_once('callFunction.php');
$url = "http://localhost/scrm/service/v4_1/rest.php";
$username = $_POST['user'];
$password = $_POST['password'];
//function to make cURL request



//login ---------------------------------------------
$login_parameters = array(
    "user_auth" => array(
        "user_name" => $username,
        "password" => md5($password),
        "version" => "1"
    ),
    "application_name" => "RestTest",
    "name_value_list" => array(),
);

$login_result = call("login", $login_parameters, $url);


echo "<pre>";
print_r($login_result);
echo "</pre>";