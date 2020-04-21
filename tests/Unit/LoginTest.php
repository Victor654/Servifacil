<?php
require_once 'application/view/home/loginA.php';

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{

    /**
     * Creates the application.
     * 
     * @return \Illuminate\Foundation\Application
     */

    public function login()
    {

        $this->type('id', '1007311489');
        $this->type('clave', '1567');
        $this->press('btni');
        $this->assertAuthenticated();

    }
}

?>