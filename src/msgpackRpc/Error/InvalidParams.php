<?php

namespace MsgpackRpc\Error;

class InvalidParams extends Error implements ErrorInterface
{
    const CODE = -32602;
    const MESSAGE = 'Invalid params';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
