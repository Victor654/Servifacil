<?php

namespace Mini\Model;

use Mini\Core\Model;

class DetalleOp extends Model
{
    public function addDetalleOp($id, $idC, $idP,$observaciones,$cantidad){
        $sql = "INSERT INTO detalle_op VALUES ('',:id, :idC, :idP, :observaciones, :cantidad)";
        $query = $this->db->prepare($sql);

        $parameters = array(':id' => $id, ':idC' => $idC, ':idP' => $idP, ':observaciones' => $observaciones, ':cantidad' => $cantidad);
        $query->execute($parameters);
    }


    public function getDetalleOp($Id_Orden_Produccion)
        {
            $sql = "SELECT dp.Id_Orden_Produccion, c.Nombre, p.Producto, dp.observaciones, dp.Cantidad, op.Fecha_Pedido, eo.Estado FROM detalle_op dp 
            INNER JOIN cliente c ON (c.Id_Cliente= dp.Id_Cliente)
            INNER JOIN producto p ON (p.Id_Producto= dp.Id_Producto)
            INNER JOIN orden_produccion op on (op.Id_Orden_Produccion= dp.Id_Orden_Produccion)
            INNER JOIN estado_op eo on eo.Id_Estado_Op=op.Id_Estado_Op
            where dp.Id_Orden_Produccion= :Id_Orden_Produccion";
            $query = $this->db->prepare($sql);
            $parameters = array(':Id_Orden_Produccion' => $Id_Orden_Produccion);

            $query->execute($parameters);

            return $query->fetchAll();
        }
}
