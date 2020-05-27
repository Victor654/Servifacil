<?php
require_once('application/config/config.php');

function answer()
{
    return 5 * 3;
}

function userExists(){
    $query = ('SELECT * FROM usuario WHERE Id_Usuario = :user AND Clave = :pass && Id_Cargo=1 AND Id_Estado=1');
    $query = $this->db->prepare($query);
    $query->execute(['user' => $user, 'pass' => $pass]);

    if($query->rowCount()){
        return true;
    }else{
        return false;
    }
}