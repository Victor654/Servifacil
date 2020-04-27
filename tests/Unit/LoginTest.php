<?php

require_once 'application/Model/user.php';


use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function LoginCorrecto()
    {
        $user = new application/Model/user.php;
        $this->assertEquals(1007311489, userExists());
        $this->assertEquals(1567, userExists());
        $this->asseTrue(true);

    }
}