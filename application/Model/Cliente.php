<?php
namespace Mini\Model;

use Mini\Core\Model;

class Cliente extends Model
{
    //Consultar
    public function getAllCliente($valor)
    {
        
        if ($valor!=null) {
        $sql = "SELECT c.Id_Cliente, ti.Tipo_Id, c.Nombre, c.Nombre_contacto,c.Numero_contacto, c.Direccion, c.Correo, c.Tel FROM cliente c
                INNER JOIN tipo_id ti ON c.Id_Tipo_Id=ti.Id_Tipo_Id
        WHERE c.Id_Cliente Like '%".$valor."%' or c.Nombre Like '%".$valor."%'";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT c.Id_Cliente, ti.Tipo_Id, c.Nombre, c.Nombre_contacto,c.Numero_contacto, c.Direccion, c.Correo, c.Tel FROM cliente c
                INNER JOIN tipo_id ti ON c.Id_Tipo_Id=ti.Id_Tipo_Id";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
        }
    }

     public function getCliente($Id_Cliente)
    {
        $sql = "SELECT Id_Cliente, Nombre, Nombre_contacto,Numero_contacto, Direccion, Correo, Tel FROM cliente WHERE Id_Cliente = :Id_Cliente LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Cliente' => $Id_Cliente);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }
    public function getClientes()
    {
        $sql = "SELECT * FROM cliente";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }

   public function addCliente($id, $nombre, $nomc, $numc, $direccion, $correo, $tel,$tipoid)
    {
        $sql = "INSERT INTO cliente VALUES (:id, :nombre, :nomc, :numc, :direccion, :email, :tel, :tipoid)";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id,  ':nombre' => $nombre, ':nomc' => $nomc, ':numc' => $numc, ':direccion' => $direccion, ':email' => $correo, ':tel' => $tel,':tipoid' => $tipoid);


        $query->execute($parameters);
    }

     public function updateCliente($id, $nombre, $nomc, $numc, $direccion, $correo, $tel, $tipoid)
    {
        $sql = "UPDATE cliente SET Id_Cliente = :id,  Id_Tipo_Id= :tipoid, Nombre= :nombre, Nombre_contacto = :nomc ,Numero_contacto= :numc, Direccion=:direccion, Correo=:email, Tel=:tel WHERE Id_Cliente = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':nombre' => $nombre, ':tipoid' => $tipoid, ':nomc' => $nomc, ':numc' => $numc, ':direccion' => $direccion, ':email' => $correo, ':tel' => $tel);

        echo "Guardado Exitosamente";
        $query->execute($parameters);
    }

    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_songs;
    }
}
?>
