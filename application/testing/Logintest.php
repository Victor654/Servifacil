<?php
//namespace Mini\Tests;
use Mini\Model\user;
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
require_once('application\Model\user.php');
//use user;
class Logintest extends TestCase
{

    use TestCaseTrait;

    /**
     * @return PHPUnit\DbUnit\Database\Connection
     */

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