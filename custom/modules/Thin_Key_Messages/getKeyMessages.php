<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$temp = array ();
$keyMessagesResult = array ();
global $current_user;

    if(!empty($_GET['productId'])){
        $product = new AOS_Products();
        $product->retrieve($_GET['productId']);
        $product->load_relationship('aos_products_thin_key_messages_1');
        foreach($product->aos_products_thin_key_messages_1->getBeans() as $ikeyMessages => $okeyMessages) {

            $temp['id']=$okeyMessages->id;
            $temp['name']=$okeyMessages->name;
            $temp['custom_reaction']=$okeyMessages->custom_reaction;
            $keyMessagesResult[]=$temp;
        }
    }
    else{
        $keyMessagesResult[]="no Messages";
    }


echo json_encode($keyMessagesResult);
