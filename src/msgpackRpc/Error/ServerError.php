<?php

namespace MsgpackRpc\Error;

class ServerError extends Error implements ErrorInterface
{
    const CODE = -32000;
    const MESSAGE = 'Server error';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
