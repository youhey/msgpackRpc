<?php

namespace MsgpackRpc\Error;

class InvalidRequest extends Error implements ErrorInterface
{
    const CODE = -32600;
    const MESSAGE = 'Invalid Request';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
