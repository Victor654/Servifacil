<?php
//namespace Mini\Model;
//use Mini\Model\user;
//use Mini\Core\Model;
//require 'user.php';
use user;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    
    /** @test */
    public function testLogin()
    {
        $Usuario = new User();
        $this->assertEquals(1007311489,$Usuario -> userExists());
        $this->assertEquals(1567,$Usuario -> userExists());
        $this->assertTrue(true);
    }
}

?>