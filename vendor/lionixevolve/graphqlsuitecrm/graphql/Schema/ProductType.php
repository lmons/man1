<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;
if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once 'data/SugarBean.php';
require_once 'include/entryPoint.php';
//require_once 'modules/Thin_CyclePlanTargets/Thin_CyclePlanTargets.php';
require_once 'modules/AOS_Products/AOS_Products.php';
require_once 'include/utils.php';
require_once 'include/formbase.php';
class ProductType extends AbstractObjectType // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('AOS_Products') as $field => $type) {
            $config->addField($field, $type);
        }
          $config->addField('calls',[
                    'type' => new ListType(new CallType()),
                    'args' => argsHelper::entityArgsHelper('Calls'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['calls'])) {
                             $args['ids']=$value['calls'];
                             return CallsListType::resolve($value, $args,$info);
                         } else {
                             return null;
                         }
                     },
                 ]);
                 $config->addField('key_messages',[
                    'type' => new ListType(new KeyMessageType()),
                    'args' => argsHelper::entityArgsHelper('Thin_Key_Messages'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['key_messages'])) {
                             $args['ids']=$value['key_messages'];
                             return KeyMessageListType::resolve($value, $args,$info);
                         } else {
                             return array();
                         }
                     },
                 ]);
      /*    /*$config->addField('created_user_details', [
              'type' => new UserType(),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['created_user_details'])) {
                      $args['id']=$value['created_user_details'];
                      return UserType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);
          $config->addField('assigned_user_details',[
              'type' => new UserType(),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['assigned_user_details'])) {
                      $args['id']=$value['assigned_user_details'];
                      return UserType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);
          $config->addField('modified_user_details', [
              'type' => new UserType(),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['modified_user_details'])) {
                      $args['id']=$value['modified_user_details'];
                      return UserType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);
          $config->addField('accounts', [
              'type' => new AccountsListType(),
              'args' => argsHelper::entityArgsHelper('Accounts'),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['accounts'])) {
                      $args['ids']=$value['accounts'];
                      return AccountsListType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);
          $config->addField('campaigns', [
              'type' => new CampaignsListType(),
              'args' => argsHelper::entityArgsHelper('Campaigns'),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['campaigns'][0])) {
                      $args['ids']=$value['campaigns'];
                      return CampaignsListType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);
          $config->addField('tasks', [
              'type' => new TasksListType(),
              'args' => argsHelper::entityArgsHelper('Tasks'),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['tasks'])) {
                      $args['ids']=$value['tasks'];
                      return TasksListType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
          ]);*/
    }
    private function retrieveProduct($id, $info=null)
    {
        global $sugar_config, $current_user;
        $productBean = BeanFactory::getBean('AOS_Products');
        $product = $productBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }
        $module_arr = array();
        if ($product->id && $product->ACLAccess('view')) {
            $all_fields = $product->column_fields;
            foreach ($all_fields as $field) {
                if (isset($product->$field) && !is_object($product->$field)) {
                    $product->$field = from_html($product->$field);
                    $product->$field = preg_replace("/\r\n/", '<BR>', $product->$field);
                    $product->$field = preg_replace("/\n/", '<BR>', $product->$field);
                    $module_arr[$field] = $product->$field;
                }
            }
             if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                 $module_arr['calls'] =  array();
                 foreach ($product->get_linked_beans('calls_aos_products_1') as $call) {
                     $module_arr['calls'][] = $call->id;
                 }
             }
              if(isset($queryFields) && array_key_exists('key_messages',$queryFields)){
                 $module_arr['key_messages'] =  array();
                 foreach ($product->get_linked_beans('aos_products_thin_key_messages_1') as $keyMessage) {
                     $module_arr['key_messages'][] = $keyMessage->id;
                 }
             }
          /* if(isset($queryFields) && array_key_exists('modified_user_details',$queryFields)){
                 $module_arr['modified_user_details']=$module_arr['modified_user_id'];
             }
             if(isset($queryFields) && array_key_exists('assigned_user_details',$queryFields)){
                 $module_arr['assigned_user_details']=$module_arr['assigned_user_id'];
             }
             if(isset($queryFields) && array_key_exists('created_user_details',$queryFields)){
                 $module_arr['created_user_details']=$module_arr['created_by'];
             }
             if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                 $module_arr['calls'] =  array();
                 foreach ($contact->get_linked_beans('calls') as $call) {
                     $module_arr['calls'][] = $call->id;
                 }
             }
             if(isset($queryFields) && array_key_exists('tasks',$queryFields)){
                 $module_arr['tasks'] =  array();
                 foreach ($contact->get_linked_beans('tasks') as $task) {
                     $module_arr['tasks'][] = $task->id;
                 }
             }

             if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                 $module_arr['accounts'] =  array();
                 foreach ($contact->get_linked_beans('accounts') as $account) {
                     $module_arr['accounts'][] = $account->id;
                 }
             }
             if(isset($queryFields) && array_key_exists('campaigns',$queryFields)){
                 $module_arr['campaigns'] =  array();
                 foreach ($contact->get_linked_beans('campaigns') as $campaign) {
                     $module_arr['campaigns'][] = $campaign->id;
                 }
             }
             if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                 $module_arr['calls'] =  array();
                 foreach ($product->get_linked_beans('calls_aos_products_1') as $call) {
                     $module_arr['calls'][] = $call->id;
                 }
             }*/
            return $module_arr;
        } else {
            return null;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            // We received a list of contacts to return
            foreach ($args as $key => $cycleId) {
                if (isset($productId) && is_array($productId)) {
                    foreach ($productId as $key => $productIdItem) {
                        $resultArray[] = self::retrieveProduct($productIdItem, $info);
                    }
                } elseif (!empty($productId)) {
                    $resultArray[] = self::retrieveProduct($productId, $info);
                }
            }
            return $resultArray;
        } else {

            // We received a list of contacts to return
            if (!empty($args['id'])) {
                return self::retrieveProduct($args['id'], $info);
            }
        }
    }

    public function getName()
    {
        return 'AOS_Products';  // important to use the real name here, it will be used later in the Schema
    }
}
