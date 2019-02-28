<?php
/**
 * This file is a part of GraphQL project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 7/5/17 8:58 PM
 */

namespace Youshido\GraphQL\ErrorHandler;

use Psr\Log\LoggerInterface;
use Youshido\GraphQL\Execution\Context\ExecutionContextInterface;

class LoggerErrorHandler extends AbstractErrorHandler
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var mixed
     */
    private $logLevel;

    /**
     * LoggerErrorHandler constructor.
     *
     * @param LoggerInterface $logger
     * @param mixed           $logLevel
     */
    public function __construct(LoggerInterface $logger, $logLevel = null)
    {
        $this->logger   = $logger;
        $this->logLevel = $logLevel;
    }

    public function handle(\Exception $error, ExecutionContextInterface $executionContext)
    {
        $this->logger->log($this->logLevel, $error->getMessage());
    }
}