<?php
//namespace Mini\Model;
use PHPUnit\Framework\TestCase;
require_once('Model\user.php');
//use user;
class Logintest extends TestCase
{
    public function testUserConection()
    {
       // $userForm = 1007311489;
        //$passForm = 1567;
        $subject = user::userExists(1007311489,1567);
        $this->assertEquals(true,$subject);
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