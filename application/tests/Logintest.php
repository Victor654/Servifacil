<?php
namespace Mini\tests;
use Mini\Model\user;
use PHPUnit\Framework\TestCase;
//use PHPUnit\DbUnit\TestCaseTrait;
//require_once('application\Model\user.php');
//use user;
class Logintest extends  TestCase
{
    public function testUserConection()
    {
       // $userForm = 1007311489;
        //$passForm = 1567;
        $user = new User();
        $this->assertEquals(userExists(1007311489,1567));
        $this->assertTrue(true,$subject);
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
?>