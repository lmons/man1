<?php
include_once "callFunction.php";
$url = "http://localhost/scrm/service/v4_1/rest.php";
$offset=$_GET['offset'];
$limit=$_GET['query_limit'];
$session_id = $_GET['session_id'];

$get_entry_list_parameters = array(

    //session id
    'session' => $session_id,

    //The name of the module from which to retrieve records
    'module_name' => 'Accounts',

    //The SQL WHERE clause without the word "where".
    'query' => "",

    //The SQL ORDER BY clause without the phrase "order by".
    'order_by' => "",

    //The record offset from which to start.
    'offset' => $offset,

    //Optional. A list of fields to include in the results.
    'select_fields' => array(
       // 'id',
        //'name',
    ),

    /*
    A list of link names and the fields to be returned for each link name.
    Example: 'link_name_to_fields_array' => array(array('name' => 'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
    */
    'link_name_to_fields_array' => array(
    ),

    //The maximum number of results to return.
    'max_results' => $limit,

    //To exclude deleted records
    'deleted' => '0',

    //If only records marked as favorites should be returned.
    'Favorites' => false,
);

$get_entry_list_result = call('get_entry_list', $get_entry_list_parameters, $url);


//print_r(json_encode($get_entry_list_result));
print_r($get_entry_list_result);


