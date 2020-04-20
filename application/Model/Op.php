<?php

namespace Mini\Model;

use Mini\Core\Model;

class Op extends Model
{
    public function addOp($id, $fecha, $estado)
    {
        $sql = "INSERT INTO orden_produccion VALUES (:Id_Op, :Fecha, :Estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Op' => $id, ':Fecha' => $fecha, ':Estado' => $estado);

        $query->execute($parameters);
    }
    public function getAllOp($valor)
    {
        if ($valor!=null) {
        $sql = "SELECT DISTINCT op.Id_Orden_Produccion,op.Fecha_Pedido,eo.Estado from orden_produccion op
        INNER JOIN estado_op eo ON op.Id_Estado_Op=eo.Id_Estado_Op
        INNER JOIN detalle_op deo ON deo.Id_Orden_Produccion=op.Id_Orden_Produccion
        INNER JOIN cliente c ON c.Id_Cliente=deo.Id_Cliente
        WHERE deo.Id_Orden_Produccion Like '%".$valor."%' or c.Nombre Like '%".$valor."%' or eo.Estado Like '%".$valor."%' order by op.Id_Estado_Op,op.Fecha_Pedido asc";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT op.Id_Orden_Produccion,op.Fecha_Pedido,eo.Estado from orden_produccion op
        INNER JOIN estado_op eo ON op.Id_Estado_Op=eo.Id_Estado_Op
        order by op.Id_Estado_Op,op.Fecha_Pedido asc";
        $query = $this->db->prepare($sql);
        $query->execute();           
        return $query->fetchAll();
       
       } 
    }
    public function Calendario()
    {
        $sql = "SELECT DISTINCT op.Id_Orden_Produccion as title, op.Fecha_Pedido as start, IF(op.Id_Estado_Op=1, '#2ab7ec',IF(op.Id_Estado_Op=2, '#FBF801',IF(op.Id_Estado_Op=3, '#04B431','#e61a1a')))as color, 'black' as textColor from orden_produccion op
        INNER JOIN estado_op eo ON op.Id_Estado_Op=eo.Id_Estado_Op
        INNER JOIN detalle_op deo ON deo.Id_Orden_Produccion=op.Id_Orden_Produccion
        INNER JOIN cliente c ON c.Id_Cliente=deo.Id_Cliente";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }
        public function getOp()
    {
        $sql = "SELECT * from orden_produccion where Id_Estado_Op=1 or Id_Estado_Op=2";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }

        public function getOp2($Id_Orden_Produccion)
    {
        $sql = "SELECT DISTINCT op.Id_Orden_Produccion,op.Fecha_Pedido,eo.Estado from orden_produccion op
        INNER JOIN estado_op eo ON op.Id_Estado_Op=eo.Id_Estado_Op
        INNER JOIN detalle_op deo ON deo.Id_Orden_Produccion=op.Id_Orden_Produccion
        INNER JOIN cliente c ON c.Id_Cliente=deo.Id_Cliente
        WHERE deo.Id_Orden_Produccion = :Id_Orden_Produccion LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Orden_Produccion' => $Id_Orden_Produccion);
        $query->execute($parameters);        
        return ($query->rowcount() ? $query->fetch() : false);
    }
        public function updateOp($id, $estado, $fecha)
    {
        $sql = "UPDATE orden_produccion SET Id_Orden_Produccion = :id, Id_Estado_Op= :estado, Fecha_Pedido= :fecha WHERE Id_Orden_Produccion = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':estado' => $estado, ':fecha' => $fecha);
        $query->execute($parameters);
    }
}
