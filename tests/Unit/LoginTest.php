<?php

require_once 'application/view/Home/LoginA.php';


use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testBasicTest()
    {
        $this->type('id','1007311489');
        $this->type('password','1567');
        $this->press('btni');

    }
}