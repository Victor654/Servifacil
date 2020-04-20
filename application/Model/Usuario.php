<?php


namespace Mini\Model;

use Mini\Core\Model;

class Usuario extends Model
{
    //Consultar
    public function getAllUsuario($valor)
    {

        if ($valor!=null) {
        $sql = "SELECT u.Id_Usuario, u.Nombre, u.Correo, e.Estado, c.Cargo,u.Id_Estado FROM usuario u
                INNER JOIN estado e ON e.Id_Estado=u.Id_Estado
                INNER JOIN cargo c ON c.Id_Cargo=u.Id_Cargo
        WHERE u.Id_Usuario Like '%".$valor."%' or u.Nombre Like '%".$valor."%'";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT u.Id_Usuario, u.Nombre, u.Correo, e.Estado, c.Cargo,u.Id_Estado FROM usuario u
                INNER JOIN estado e ON e.Id_Estado=u.Id_Estado
                INNER JOIN cargo c ON c.Id_Cargo=u.Id_Cargo";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
        }
    }

     public function getUsuario($Id_Usuario)
    {
        $sql = "SELECT Id_Usuario, Nombre, Clave, Correo, Id_Estado, Id_Cargo FROM usuario WHERE Id_Usuario = :Id_Usuario LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Usuario' => $Id_Usuario);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function addUsuario($id, $nombre, $clave, $email, $id_estado, $id_cargo)
    {
        $sql = "INSERT INTO  usuario VALUES (:id, :nombre, :clave, :email, :id_estado, :id_cargo)";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':nombre' => $nombre, ':clave' => $clave, ':email' => $email, ':id_estado' => $id_estado, ':id_cargo' => $id_cargo);


        $query->execute($parameters);
    }

    public function updateUsuario($id, $nombre, $clave, $email, $id_estado, $id_cargo)
    {
        $sql = "UPDATE usuario SET Id_Usuario = :id, Nombre= :nombre, Clave=:clave, Correo=:email,  Id_Estado= :id_estado, Id_Cargo=:id_cargo WHERE Id_Usuario = :id";
        $query = $this->db->prepare($sql);
       $parameters = array(':id' => $id, ':nombre' => $nombre, ':clave' => $clave, ':email' => $email, ':id_cargo' => $id_cargo, ':id_estado' => $id_estado);

        echo "Guardado Exitosamente";
        $query->execute($parameters);
    }
    
    public function estadoUsuario($Id_Usuario,$Id_Estado)
    {
        if($Id_Estado==1){
            $sql = "UPDATE usuario SET Id_Estado= 2 WHERE Id_Usuario = :Id_Usuario";
        $query = $this->db->prepare($sql);
       $parameters = array(':Id_Usuario' => $Id_Usuario);
       $query->execute($parameters);

        }elseif ($Id_Estado==2) {
             $sql = "UPDATE usuario SET Id_Estado= 1 WHERE Id_Usuario = :Id_Usuario";
        $query = $this->db->prepare($sql);
       $parameters = array(':Id_Usuario' => $Id_Usuario);
       $query->execute($parameters);
        }

    }
    public function recuperarClave($Correo,$Id_Usuario,$Clave){
         $sql = "UPDATE usuario SET Clave= :Clave WHERE Id_Usuario = :Id_Usuario and Correo= :Correo";
        $query = $this->db->prepare($sql);
       $parameters = array(':Id_Usuario' => $Id_Usuario,':Correo' => $Correo, ':Clave' => $Clave);
       $query->execute($parameters);
    }

  
}