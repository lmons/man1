<?php

$url = "http://localhost/scrm/service/v4_1/rest.php";
$username = "admin";
$password = "password";

//function to make cURL request
function call($method, $parameters, $url)
{
    ob_start();
    $curl_request = curl_init();

    curl_setopt($curl_request, CURLOPT_URL, $url);
    curl_setopt($curl_request, CURLOPT_POST, 1);
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

    $jsonEncodedData = json_encode($parameters);

    $post = array(
        "method" => $method,
        "input_type" => "JSON",
        "response_type" => "JSON",
        "rest_data" => $jsonEncodedData
    );

    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($curl_request);
    curl_close($curl_request);

    $result = explode("\r\n\r\n", $result, 2);
    $response = json_decode($result[1]);
    ob_end_flush();

    return $response;
}

//login --------------------------------------------
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

/*
echo "<pre>";
print_r($login_result);
echo "</pre>";
*/

//get session id
$session_id = $login_result->id;

//create contacts ------------------------------------
$set_entries_parameters = array(
    //session id
    "session" => $session_id,

    //The name of the module from which to retrieve records.
    "module_name" => "Calls",

    //Record attributes
    "name_value_list" => array(
        array(
            //to update a record, you will nee to pass in a record id as commented below
            //array("name" => "id", "value" => "912e58c0-73e9-9cb6-c84e-4ff34d62620e"),
            array("name" => "parent_type", "value" => "Contacts"),
            array("name" => "parent_id", "value" => "110abec8-a9c8-f593-79b6-586a7d29c4a6"),
            array("name" => "contact_id", "value" => "110abec8-a9c8-f593-79b6-586a7d29c4a6"),
            array("name" => "name", "value" => "test1"),
        ),
        array(
            //to update a record, you will nee to pass in a record id as commented below
            //array("name" => "id", "value" => "99d6ddfd-7d52-d45b-eba8-4ff34d684964"),
            array("name" => "parent_type", "value" => "Contacts"),
            array("name" => "parent_id", "value" => "112f2b68-4206-8b49-a667-586a7e07c8fd"),
            array("name" => "contact_id", "value" => "112f2b68-4206-8b49-a667-586a7e07c8fd"),
            array("name" => "name", "value" => "test2"),
        ),
    ),
);

$set_entries_result = call("set_entries", $set_entries_parameters, $url);

echo "<pre>";
print_r($set_entries_result);
echo "</pre>";

?>