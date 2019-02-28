<?php
/**
 * This file is a part of GraphQL project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 7/4/17 11:36 PM
 */

namespace Youshido\GraphQL\ErrorHandler;

use Youshido\GraphQL\Execution\Context\ExecutionContextInterface;

interface ErrorHandlerInterface
{
    /**
     * @param \Exception                $error
     * @param ExecutionContextInterface $executionContext
     *
     * @return mixed
     */
    public function handle(\Exception $error, ExecutionContextInterface $executionContext);

    public function isFinalHandler($error);
}
