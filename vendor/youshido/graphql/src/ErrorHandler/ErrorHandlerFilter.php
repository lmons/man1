<?php
/**
 * This file is a part of GraphQL project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 7/5/17 7:27 AM
 */

namespace Youshido\GraphQL\ErrorHandler;


use Youshido\GraphQL\Execution\Context\ExecutionContextInterface;

class ErrorHandlerFilter extends AbstractErrorHandler
{
    /** @var callable */
    private $filterFn;

    /** @var ErrorHandlerInterface */
    private $errorHandler;

    /**
     * ErrorHandlerFilter constructor.
     *
     * @param callable              $filterFn
     * @param ErrorHandlerInterface $errorHandler
     *
     * @throws \Exception
     */
    public function __construct($filterFn, ErrorHandlerInterface $errorHandler)
    {
        if (!is_callable($filterFn)) {
            throw new \Exception('Filter function should be callable');
        }
        $this->errorHandler = $errorHandler;
        $this->filterFn     = $filterFn;
    }

    public function handle(\Exception $error, ExecutionContextInterface $executionContext)
    {
        $fn = $this->filterFn;
        if ($fn($error, $executionContext)) {
            $this->errorHandler->handle($error, $executionContext);
        }
        return true;
    }
}
