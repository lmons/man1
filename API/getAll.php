<?php
$url = "http://scrm.thnln.com/service/v4_1/rest.php";
$username = "admin";
$password = "password";
//function to make cURL request
$resultat = array();
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
$session_id = $login_result->id;
$get_entry_list_parameters = array( 'session' => $session_id,'module_name' => 'Thin_CyclePlans','query' => 'thin_cycleplans.active=1 AND assigned_user_id = \'39\' AND thin_cycleplans_cstm.cp_type_c=\'Contacts\' ','order_by' => "",'offset' => '0','fields' => array('id','name','cp_type_c'),'link_name_to_fields_array'=> array(),'deleted' => '0',);
$get_entry_list_result = call("get_entry_list", $get_entry_list_parameters, $url);
//print_r(json_encode($get_entry_list_result));
foreach (($get_entry_list_result->entry_list) as $key=>$value) {

    $get_relationships_parameters = array(
    'session' => $session_id,'module_name' => 'Thin_CyclePlans','module_id' => $value->id,'link_field_name' =>'thin_cycleplans_thin_cycleplantargets','related_module_query' => "",'related_fields' =>array('id','name'),'related_module_link_name_to_fields_array' =>array(
         array(
             'name' => 'thin_cycleplantargets_contacts',
             'value' => array(
                 'id',
                 'first_name',
                 'last_name',
             ),
         ),
     ),'deleted'=> 0,'order_by' => '','offset' => 0,'limit' => 1000,);
$get_relationships_result = call("get_relationships", $get_relationships_parameters, $url);
foreach(($get_relationships_result->relationship_list) as $value2){
    foreach($value2 as $v){
        foreach($v->records as $v2){
        $r['doctors'][]=array(id=>$v2->id->value,first_name=>$v2->first_name->value,last_name=>$v2->last_name->value);
        
        /*   $get_relationships_parameters3 = array(
    'session' => $session_id,'module_name' => 'Contacts','module_id' =>$v2->id->value,'link_field_name' =>'calls_contacts','related_module_query' => "",'related_fields' =>array('id','name'),'related_module_link_name_to_fields_array' =>array(),'deleted'=> 0,'order_by' => '','offset' => 0,'limit' => 1000);
     $get_relationships_result3[] = call("get_relationships", $get_relationships_parameters3, $url);*/
    }
    }
    
}
/*foreach(($get_relationships_result->entry_list) as $key2=>$value2){
    $r['entry'][]=array($key2=>$value2);
}*/

}
print_r(json_encode($r));

?>

