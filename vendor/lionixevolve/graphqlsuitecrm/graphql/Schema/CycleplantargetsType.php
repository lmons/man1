<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;

class CycleplantargetsType extends AbstractObjectType // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Thin_CyclePlanTargets') as $field => $type) {
            $config->addField($field, $type);
        }
        $config->addField('contacts', [
            'type'=> new ContactsListType(),
            'args' => argsHelper::entityArgsHelper('Contacts'),
            'resolve' => function ($value, $args, ResolveInfo $info) {
                if (!empty($value['contacts'])) {
                    $args['ids']=$value['contacts'];
                    return ContactsListType::resolve($value, $args,$info);
                } else {
                    return null;
                }
            },
        ]);
         $config->addField('thin_cycleplans',[
              'type' => new CycleplanListType(),
              'args' => argsHelper::entityArgsHelper('Thin_CyclePlans'),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['thin_cycleplans'])) {
                      $args['ids']=$value['thin_cycleplans'];
                      return CycleplanListType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
        ]);
        /*$config->addField('email1', new StringType());
        $config->addField('calls',[
            'type' => new ListType(new CallType()),
            'args' => argsHelper::entityArgsHelper('Calls'),
            'resolve' => function ($value, array $args, ResolveInfo $info) {
                $args['id']=$value['calls'];
                return CallsListType::resolve($value, $args, $info);
            },
        ]);
        $config->addField('created_user_details', [
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
    private function retrieveCyclePlanTargets($id, $info=null)
    {
        global $sugar_config, $current_user;
        $cycleBean = BeanFactory::getBean('Thin_CyclePlanTargets');
        $cycle = $cycleBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }
        $module_arr = array();
        if ($cycle->id && $cycle->ACLAccess('view')) {
            $all_fields = $cycle->column_fields;
            foreach ($all_fields as $field) {
                if (isset($cycle->$field) && !is_object($cycle->$field)) {
                    $cycle->$field = from_html($cycle->$field);
                    $cycle->$field = preg_replace("/\r\n/", '<BR>', $cycle->$field);
                    $cycle->$field = preg_replace("/\n/", '<BR>', $cycle->$field);
                    $module_arr[$field] = $cycle->$field;
                }
            }
            if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                $cycle->load_relationship('thin_cycleplantargets_contacts');
                $module_arr['contacts'] =  array();
                foreach ($cycle->thin_cycleplantargets_contacts->getBeans() as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
            }
            if(isset($queryFields) && array_key_exists('thin_cycleplans',$queryFields)){
                 $module_arr['thin_cycleplans'] =  array();
                 foreach ($cycle->get_linked_beans('thin_cycleplans_thin_cycleplantargets') as $cyclePlan) {
                     $module_arr['thin_cycleplans'][] = $cyclePlan->id;
                 }
             }

            /*if(isset($queryFields) && array_key_exists('modified_user_details',$queryFields)){
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
                if (isset($cycleId) && is_array($cycleId)) {
                    foreach ($cycleId as $key => $cycleIdItem) {
                        $resultArray[] = self::retrieveCyclePlanTargets($cycleIdItem, $info);
                    }
                } elseif (!empty($cycleId)) {
                    $resultArray[] = self::retrieveCyclePlanTargets($cycleId, $info);
                }
            }
            return $resultArray;
        } else {

            // We received a list of contacts to return
            if (!empty($args['id'])) {
                return self::retrieveCyclePlanTargets($args['id'], $info);
            }
        }
    }

    public function getName()
    {
        return 'Thin_CyclePlanTarget';  // important to use the real name here, it will be used later in the Schema
    }
}
