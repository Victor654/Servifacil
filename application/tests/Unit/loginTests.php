<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once('application/Model/user.php');

class loginTests extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function PruebaLlamandoFunsio()
    {
        $user = new user();
        $this->assertEquals(15,$user -> answer());
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testBasicTest1()
    {
        $this->assertFalse(false);
    }
    public function testHelloWorld()
    {
        $this->assertEquals("hello world", "hello world");
    }

    public function testHelloWorld2()
    {
        $this->assertEquals("hello world", "hello world");
    }
}
