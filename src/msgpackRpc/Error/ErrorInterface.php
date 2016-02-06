<?php

namespace MsgpackRpc\Error;

interface ErrorInterface
{
    public function getCode();
    public function getMessage();
}
