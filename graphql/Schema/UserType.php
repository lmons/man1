<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;
require_once 'argsHelper.php';

class UserType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Users',true) as $field => $type) {
            $config->addField($field, $type);
        }
        $config->addField('session_id', new StringType());
        $config->addField('email1', new StringType());
        $config->addField('roles', new StringType());
        $config->addField('related_roles', [
                    'type' => new ListType(new AclRoleType()),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['related_roles'])) {
                             $args['id']=$value['related_roles'];
                             return AclRoleType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
                ]);
    }
    private function retrieveUser($id, $info)
    {
        global $db, $sugar_config, $current_user;
        $userBean = BeanFactory::getBean('Users');
        $user = $userBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }
        $module_arr = array();
        if ($user->id && $user->ACLAccess('view')) {
            $all_fields = $user->column_fields;
            foreach ($all_fields as $field) {
                if (isset($user->$field) && !is_object($user->$field)) {
                    $user->$field = from_html($user->$field);
                    $user->$field = preg_replace("/\r\n/", '<BR>', $user->$field);
                    $user->$field = preg_replace("/\n/", '<BR>', $user->$field);
                    $module_arr[$field] = $user->$field;
                }
            }

            $roles = ACLRole::getUserRoleNames($id);
            if (!empty($roles)) {
                //LX: TODO - create a RoleType to correctly return data
                foreach ($roles as $key => $value) {
                    $module_arr['roles'] = $value;
                }
            }

            $sql = "
            SELECT r.id
            FROM users u
            INNER JOIN acl_roles_users ur ON u.id = ur.user_id
            INNER JOIN acl_roles r ON ur.role_id = r.id
            WHERE u.deleted = 0
                AND ur.deleted = 0
                AND r.deleted = 0
                AND u.id = '{$id}';
            ";
            $result=$db->query($sql);
            if(isset($queryFields) && array_key_exists('related_roles',$queryFields)){
                $module_arr['related_roles'] =  array();
                while (($row = $db->fetchByAssoc($result)) != null) {
                    $module_arr['related_roles'][] = $row['id'];
                }
            }
            // foreach ($user->ACLRoles->getBeans() as $role) {
            //     $module_arr['related_roles'][] = $role->id;
            // }

            // $m1 = 'Users';
            // $m2 = 'ACLRoles';
            // lxlog(getRelationshipByModules($m1, $m2));
            // $m1 = 'ACLRoles';
            // $m2 = 'Users';
            // lxlog(getRelationshipByModules($m1, $m2));
            // $m1 = 'Users';
            // $m2 = 'Opportunities';
            // lxlog(getRelationshipByModules($m1, $m2));
            return $module_arr;
        } else {
            return null;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if(!empty($args['whoami'])){
            global $current_user;
            if($_SESSION['authenticated_user_id']){
                $user=self::retrieveUser($_SESSION['authenticated_user_id'], $info);
                $user['session_id']=session_id();
                return $user;

            }else{
                return null;
            }
        }
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $userId) {
                if (isset($userId) && is_array($userId)) {
                    foreach ($userId as $key => $userIdItem) {
                        $resultArray[] = self::retrieveUser($userIdItem,$info);
                    }
                } elseif (!empty($userId)) {
                    $resultArray[] = self::retrieveUser($userId,$info);
                }
            }
            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveUser($args['id'],$info);
        }

    }

    public function getName()
    {
        return 'User';  // important to use the real name here, it will be used later in the Schema
    }
    public function getOutputType()
    {
        return 'User';  // important to use the real name here, it will be used later in the Schema
    }
}
