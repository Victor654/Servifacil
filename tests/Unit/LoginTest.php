<?php

require_once 'application/Controller/HomeController.php';


use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function LoginCorrecto()
    {
        $this->assertSame(1007311489, Login($userForm));
        $this->assertSame(1567, Login($passForm));
        $this->asseTrue(True);

    }
}