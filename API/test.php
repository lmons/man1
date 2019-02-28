<?php
$post =file_get_contents('php://input');
$postDecode=json_decode($post);
$id_medecin=$_GET['id_medecin'];
$url = "http://scrm.thnln.com/service/v4_1/rest.php";
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

/*
echo "<pre>";
print_r($login_result);
echo "</pre>";
*/

//get session id
$session_id = $login_result->id;

$get_relationships_parameters = array(
//session id
    'session' => $session_id,

//The name of the module from which to retrieve records.
    'module_name' => 'Thin_CyclePlans',

//The ID of the specified module bean.
    'module_id' => '1000718',

//The relationship name of the linked field from which to return records.
    'link_field_name' => 'thin_cycleplans_thin_cycleplantargets',

//The portion of the WHERE clause from the SQL statement used to find the related items.
   'related_module_query' => "",

//The related fields to be returned.
    'related_fields' => array('id','name'),

//For every related bean returned, specify link field names to field information.


//To exclude deleted records
    'deleted'=> 0,

//order by
    'order_by' => '',

//offset
    'offset' => 0,

//limit
    'limit' => 20,
);
$get_relationships_result = call("get_relationships", $get_relationships_parameters, $url);
print_r(json_encode($get_relationships_result));


?>

