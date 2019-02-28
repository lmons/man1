<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$view=$_POST['view'];
$session_id = $_POST['session_id'];
$get_module_layout_parameters = array(
    //Session id
    'session' => $session_id,

    //The list of modules
    'modules' => array(
        'Accounts'
    ),

    //The types of views requested
    'types' => array(
        'default',
    ),

    //The views requested
    'views' => array(
        $view
    ),

    //Whether or not to check for ACL access
    'acl_check' => true,

    //Whether to return the results as an MD5 hash
    'md5' => false,
);

$get_module_layout_result = call("get_module_layout", $get_module_layout_parameters, $url);

print_r($get_module_layout_result);

?>