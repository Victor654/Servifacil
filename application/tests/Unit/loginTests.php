<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

//use Mini\Model\prueba;

require_once('application/Model/prueba.php');

class loginTests extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUserConection()
    {
       // $userForm = 1007311489;
        //$passForm = 1567;
        //$user = new user();
        $userForm = 1007311489;
        $passForm = 1567;
        $this->assertEquals(1007311489, userExists());
        $this->assertEquals(1567, userExists());
        
    }


    public function testPruebaLlamandoFunsio()
    {
        $this->assertEquals(15, answer());
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
