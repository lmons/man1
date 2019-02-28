<?php

namespace Youshido\GraphQL\ErrorHandler;

abstract class AbstractErrorHandler implements ErrorHandlerInterface
{

    public function isFinalHandler($error)
    {
        return false;
    }

}
