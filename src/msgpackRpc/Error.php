<?php

namespace MsgpackRpc;

class Error
{
    const CODE = [
            'parse_error'      => -32700,
            'invalid_request'  => -32600,
            'method_not_found' => -32601,
            'invalid_params'   => -32602,
            'internal_error'   => -32603,
            'server_error'     => [-32000, -32099],
        ];

    const MESSAGE = [
            'parse_error'      => 'Parse error',
            'invalid_request'  => 'Invalid Request',
            'method_not_found' => 'Method not found',
            'invalid_params'   => 'Invalid params',
            'internal_error'   => 'Internal error',
            'server_error'     => 'Server error',
        ];

    public $code;
    public $message;

    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public static function parseError(): self
    {
        return new self(self::CODE['parse_error'], self::MESSAGE['parse_error']);
    }

    public static function invalidRequest()
    {
        return new self(self::CODE['invalid_request'], self::MESSAGE['invalid_request']);
    }

    public static function methodNotFound()
    {
        return new self(self::CODE['method_not_found'], self::MESSAGE['method_not_found']);
    }

    public static function invalidParams()
    {
        return new self(self::CODE['invalid_params'], self::MESSAGE['invalid_params']);
    }

    public static function internalError()
    {
        return new self(self::CODE['internal_error'], self::MESSAGE['internal_error']);
    }

    public static function serverError()
    {
        return new self(self::CODE['server_error'][0], self::MESSAGE['server_error']);
    }
}
