<?php

namespace MsgpackRpc\Error;

class InternalError extends Error implements ErrorInterface
{
    const CODE = -32603;
    const MESSAGE = 'Internal error';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
