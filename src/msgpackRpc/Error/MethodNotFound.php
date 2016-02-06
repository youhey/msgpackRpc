<?php

namespace MsgpackRpc\Error;

class MethodNotFound extends Error implements ErrorInterface
{
    const CODE = -32601;
    const MESSAGE = 'Method not found';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
