<?php
namespace Mini\Model;

use Mini\Core\Model;

class user_session extends Model
{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }
 
    public function setCurrentUser2($user){
        $_SESSION['user2'] = $user;
    }

    public function getCurrentUser2(){
        return $_SESSION['user2'];
    }
    
     public function setCurrentUser3($user){
        $_SESSION['user3'] = $user;
    }

    public function getCurrentUser3(){
        return $_SESSION['user3'];
    }

      public function closeSession(){
        session_unset();
        session_destroy();
    }

}

?>
