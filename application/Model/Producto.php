<?php

namespace Mini\Model;

use Mini\Core\Model;

class Producto extends Model
{
    public function addProducto($referencia, $producto, $descripcion, $tipo_producto)
    {
        $sql = "INSERT INTO producto VALUES ('',:referencia, :producto, :descripcion, :tipo_producto)";
        $query = $this->db->prepare($sql);
        $parameters = array(':referencia' => $referencia, ':producto' => $producto, ':descripcion' => $descripcion, ':tipo_producto' => $tipo_producto);

        $query->execute($parameters);
    }

    public function getAllProducto($valor)
    {   if ($valor!=null) {
        $sql = "SELECT P.Referencia,P.Id_Producto,P.Producto,P.Descripcion,tp.Tipo_Producto from producto p
        INNER JOIN Tipo_Producto tp ON p.Id_Tipo_Producto=tp.Id_Tipo_Producto
        WHERE P.Referencia Like '%".$valor."%' or P.Producto Like '%".$valor."%' or tp.Tipo_Producto Like '%".$valor."%'
        ORDER BY tp.Tipo_Producto";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT P.Referencia,P.Id_Producto,P.Producto,P.Descripcion,tp.Tipo_Producto from producto p
        INNER JOIN Tipo_Producto tp ON p.Id_Tipo_Producto=tp.Id_Tipo_Producto
        ORDER BY tp.Tipo_Producto";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
        }
    }

    
    public function getProducto($Id_Producto)
    {
        $sql = "SELECT p.Referencia,p.Id_Producto, p.Producto, p.Descripcion, p.Id_Tipo_Producto FROM producto p
        WHERE p.Id_Producto = :Id_Producto";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Producto' => $Id_Producto);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }
        public function getDetalleProducto($Id_Producto)
    {
        $sql = "SELECT Pieza,Fase From ficha_tecnica ft
        INNER JOIN detalle_fase df ON df.Id_Detalle_Fase=ft.Id_Detalle_Fase
        INNER JOIN pieza p ON p.Id_Pieza=df.Id_Pieza
        INNER JOIN fase f ON f.Id_Fase=df.Id_Fase
        Where Id_Producto= :Id_Producto
        ORDER By p.Id_Pieza";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Producto' => $Id_Producto);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);

    }
     public function getProductos()
    {
        $sql = "SELECT * FROM producto";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }

     public function updateProducto($id, $producto, $descripcion, $tipo_producto,$referencia)
    {
        $sql = "UPDATE producto SET Id_Producto = :id, Referencia= :referencia, Producto= :producto, Descripcion=:descripcion, Id_Tipo_Producto=:tipo_producto WHERE Id_Producto = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':producto' => $producto, ':descripcion' => $descripcion, ':tipo_producto' => $tipo_producto, ':referencia' => $referencia);
        $query->execute($parameters);
    }

    public function Numero_Id()
    {
        $sql = "SELECT Id_Producto+1 as numero from Producto order by Id_Producto desc limit 1";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

 public function getProducto2($Id_Orden_Produccion)
    {
        $sql = "SELECT DISTINCT dop.Id_Producto,p.Producto FROM detalle_op dop
        INNER JOIN producto p ON  (p.Id_Producto=dop.Id_Producto)
        Where Id_Orden_Produccion= :Id_Orden_Produccion
        Order By dop.Id_Producto";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Orden_Produccion' => $Id_Orden_Produccion);

        $query->execute($parameters);

       return $query->fetchAll();
    }


}
