<?php
namespace Mini\Model;

use Mini\Core\Model;

class user extends Model
{
    private $nombre;
    private $Id_Usuario;

     public function setUser($user){
        $query = ('SELECT * FROM usuario WHERE Id_Usuario = :user');
        $query = $this->db->prepare($query);
        $query->execute(['user' => $user]);
    }

    public function userExists($user, $pass){
        $query = ('SELECT * FROM usuario WHERE Id_Usuario = :user AND Clave = :pass && Id_Cargo=1 AND Id_Estado=1');
        $query = $this->db->prepare($query);
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

       public function userExists2($id, $clave){
        $sql=('SELECT * FROM usuario WHERE Id_Usuario = :id AND Clave = :clave && Id_Cargo=2 AND Id_Estado=1');
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id, 'clave' => $clave]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

     public function userExists3($id){
        $sql=('SELECT * FROM operario WHERE Id_Operario = :id AND Id_Estado=1');
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

     public function setUser2($user){
        $query = ('SELECT * FROM operario WHERE Id_Operario = :user');
        $query = $this->db->prepare($query);
        $query->execute(['user' => $user]);         
    }
    


}
?>
