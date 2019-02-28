<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
require_once 'argsHelper.php';

class EventInputType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('FP_events',false) as $field => $type) {
            $config->addField($field, $type);
        }
    }

    public function resolve($value = null, $args = [], $type = null)  // implementing resolve function
    {
        //We use the crm Helper to create/save the Bean
        return crmHelper::saveBean('FP_events', 'FP_events', $args);
    }

    public function getName()
    {
        return 'FP_events';  // important to use the real name here, it will be used later in the Schema
    }
    public function getOutputType()
    {
        return 'FP_events';  // important to use the real name here, it will be used later in the Schema
    }
}
