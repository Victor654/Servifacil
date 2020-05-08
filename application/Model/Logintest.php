<?php
//namespace Mini\Model;
//use Mini\Model\user;
//use Mini\Core\Model;
//require_once 'user.php';
use user;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    
    /** @test */
    public function testLogin()
    {
        $user = new User();
        $this->assertEquals(1007311489,$user -> userExists());
        $this->assertEquals(1567,$user -> userExists());
        $this->assertTrue(true);
    }
}

?>