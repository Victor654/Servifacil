<?php
//namespace Mini\Model;
//use Mini\Core\Model;
//use Mini\Model\user;
require_once 'application\Model\user.php';
//use user;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    
    /** @test */
    public function testLogin()
    {
        $userForm = $_POST['id'];
        $passForm = $_POST['clave'];
    
        $user = new User();
        if($user->userExists($userForm, $passForm)){
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);

        }
        $this->assertSame(true,$user -> userExists(1007311489, 1567));
        //(1007311489,$user -> userExists());
        $this->assertSame(1567,$user -> userExists());
        $this->assertTrue(true);

    }
}

?>