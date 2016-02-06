<?php

namespace MsgpackRpc\Error;

class ParseError extends Error implements ErrorInterface
{
    const CODE = -32700;
    const MESSAGE = 'Parse error';

    public function __construct()
    {
        parent::__construct(self::CODE, self::MESSAGE);
    }
}
