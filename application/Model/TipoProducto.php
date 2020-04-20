<?php

namespace Mini\Model;

use Mini\Core\Model;

class TipoProducto extends Model
{

 public function getAllTipo()
    {

        $sql = "SELECT * FROM tipo_producto";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }
    public function getTipo($Id_Tipo_Producto)
    {

        $sql = "SELECT * FROM tipo_producto where Id_Tipo_Producto = :Id_Tipo_Producto";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Tipo_Producto' => $Id_Tipo_Producto);
        $query->execute($parameters);
        
         return ($query->rowcount() ? $query->fetch() : false);

    }
    public function addTipo($tipo_producto)
    {
        $sql = "INSERT INTO tipo_producto VALUES ('',:tipo_producto)";
        $query = $this->db->prepare($sql);
        $parameters = array(':tipo_producto' => $tipo_producto);

        $query->execute($parameters);
    }
     public function updateTipo($id, $tipo_producto)
    {
        $sql = "UPDATE tipo_producto SET Id_Tipo_Producto = :id, Tipo_Producto= :tipo_producto WHERE Id_Tipo_Producto = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':tipo_producto' => $tipo_producto);

        $query->execute($parameters);
    }

}