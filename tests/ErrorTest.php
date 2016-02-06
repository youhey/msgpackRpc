<?php

namespace MsgpackRpc;

class ErrorsTest extends \PHPUnit_Framework_TestCase
{
    public function testGetCode()
    {
        $error = new Error(42, 'Unknown error');

        $this->assertEquals(42, $error->getCode());
    }

    public function testGetMessage()
    {
        $error = new Error(42, 'Unknown error');

        $this->assertEquals('Unknown error', $error->getMessage());
    }

    public function testParseError()
    {
        $error = Error::parseError();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertEquals(-32700, $error->getCode());
        $this->assertEquals('Parse error', $error->getMessage());
    }

    public function testInvalidRequet()
    {
        $error = Error::invalidRequest();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertEquals(-32600, $error->getCode());
        $this->assertEquals('Invalid Request', $error->getMessage());
    }

    public function testMethodNotFound()
    {
        $error = Error::methodNotFound();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertEquals(-32601, $error->getCode());
        $this->assertEquals('Method not found', $error->getMessage());
    }

    public function testInvalidParams()
    {
        $error = Error::invalidParams();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertEquals(-32602, $error->getCode());
        $this->assertEquals('Invalid params', $error->getMessage());
    }

    public function testInternalError()
    {
        $error = Error::internalError();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertEquals(-32603, $error->getCode());
        $this->assertEquals('Internal error', $error->getMessage());
    }

    public function testServerError()
    {
        $error = Error::serverError();

        $this->assertInstanceOf('\\MsgpackRpc\\Error', $error);
        $this->assertGreaterThanOrEqual(-32099, $error->getCode());
        $this->assertLessThanOrEqual(-32000, $error->getCode());
        $this->assertEquals('Server error', $error->getMessage());
    }
}
