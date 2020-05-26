<?php
namespace tests;
use Mini\Model\user;
use PHPUnit\Framework\TestCase;
//use PHPUnit\DbUnit\TestCaseTrait;
require_once('application\Model\user.php');
//use user;
class Logintest extends  TestCase
{

    public function testUserConection()
    {
       // $userForm = 1007311489;
        //$passForm = 1567;
        //$user = new user();
        $userForm = 1007311489;
        $passForm = 1567;
        $this->assertEquals(1007311489, userExists());
        $this->assertEquals(1567, userExists());
        $this->assertTrue(true, userExists());
    }


    public function testLife_the_universe_and_everything()
    {
        $user = new user();
        $this->assertEquals(15,$user -> answer());
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