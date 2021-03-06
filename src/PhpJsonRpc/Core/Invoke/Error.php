<?php

namespace PhpJsonRpc\Core\Invoke;

use PhpJsonRpc\Error\JsonRpcException;

class Error extends AbstractInvoke
{
    /**
     * @var JsonRpcException
     */
    private $baseException;

    /**
     * ErrorUnit constructor.
     *
     * @param JsonRpcException $baseException
     */
    public function __construct(JsonRpcException $baseException)
    {
        $this->baseException = $baseException;
    }

    /**
     * @return JsonRpcException
     */
    public function getBaseException()
    {
        return $this->baseException;
    }
}
