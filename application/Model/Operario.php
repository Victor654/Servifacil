<?php


namespace Mini\Model;

use Mini\Core\Model;

class Operario extends Model
{
         public function getOperario($Id_Operario)
    {
        $sql = "SELECT Id_Operario, Nombre, Correo, Id_Estado FROM operario WHERE Id_Operario = :Id_Operario LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Operario' => $Id_Operario);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }
    public function getAllOperario2()
    {
        $sql = "SELECT * from operario where Id_Estado=1";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }
        public function getAllOperario3()
    {
        $sql = "SELECT * from operario";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }


     public function getAllOperario($valor)
    {

        if ($valor!=null) {
        $sql = "SELECT o.Id_Operario, o.Nombre, o.Correo, e.Estado,o.Id_Estado FROM operario o
                INNER JOIN estado e ON o.Id_Estado=e.Id_Estado
        WHERE o.Id_Operario Like '%".$valor."%' or o.Nombre Like '%".$valor."%'";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT o.Id_Operario, o.Nombre, o.Correo, e.Estado,o.Id_Estado FROM operario o
                INNER JOIN estado e ON o.Id_Estado=e.Id_Estado";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
        }
    }

    public function addOperario($id, $nombre, $email, $id_estado)
    {
        $sql = "INSERT INTO  operario VALUES (:id, :nombre, :email, :id_estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':nombre' => $nombre, ':email' => $email, ':id_estado' => $id_estado);


        $query->execute($parameters);
    }

    public function updateOperario($id, $nombre,$email, $id_estado)
    {
        $sql = "UPDATE operario SET Id_Operario = :id, Nombre= :nombre, Correo=:email,  Id_Estado= :id_estado WHERE Id_Operario = :id";
        $query = $this->db->prepare($sql);
       $parameters = array(':id' => $id, ':nombre' => $nombre, ':email' => $email, ':id_estado' => $id_estado);

        echo "Guardado Exitosamente";
        $query->execute($parameters);
    }
     public function estadoOperario($Id_Operario,$Id_Estado)
    {
        if($Id_Estado==1){
            $sql = "UPDATE operario SET Id_Estado= 2 WHERE Id_Operario = :Id_Operario";
        $query = $this->db->prepare($sql);
       $parameters = array(':Id_Operario' => $Id_Operario);
       $query->execute($parameters);

        }elseif ($Id_Estado==2) {
             $sql = "UPDATE operario SET Id_Estado= 1 WHERE Id_Operario = :Id_Operario";
        $query = $this->db->prepare($sql);
       $parameters = array(':Id_Operario' => $Id_Operario);
       $query->execute($parameters);
        }

    }
    
      
}