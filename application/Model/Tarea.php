<?php


namespace Mini\Model;

use Mini\Core\Model;

class Tarea extends Model
{
    public function addTarea($Id_Op, $Id_Operario, $Id_Producto, $Fecha,$Tarea)
    {
        $sql = "INSERT INTO  tarea VALUES ('',:Id_Op, :Id_Operario, :Id_Producto, :Fecha, :Tarea,1)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Op' => $Id_Op, ':Id_Operario' => $Id_Operario, ':Id_Producto' => $Id_Producto,':Fecha' => $Fecha,':Tarea' => $Tarea);


        $query->execute($parameters);
    }

     public function getTarea($Id_Operario)
    {
        $sql = "SELECT Id_Tarea,Id_Orden_Produccion,Producto,Tarea,e.Estado,Estado_Tarea,Fecha_Tarea FROM tarea t
        INNER JOIN producto p ON  (p.Id_Producto=t.Id_Producto)
        INNER JOIN estado e ON (e.Id_Estado=t.Estado_Tarea)
        Where Id_Operario= :Id_Operario and t.Estado_Tarea=1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Operario' => $Id_Operario);

        $query->execute($parameters);

       return $query->fetchAll();
    }
     public function getTarea2($Id_Orden_Produccion)
    {
        $sql = "SELECT t.Id_Tarea,t.Estado_Tarea,Id_Orden_Produccion,Producto,Tarea,e.Estado,Fecha_Tarea,Nombre FROM tarea t
        INNER JOIN producto p ON  (p.Id_Producto=t.Id_Producto)
        INNER JOIN operario o ON  (o.Id_Operario=t.Id_Operario)
        INNER JOIN estado e ON (e.Id_Estado=t.Estado_Tarea)
        Where Id_Orden_Produccion= :Id_Orden_Produccion
        Order By t.Id_Tarea";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Orden_Produccion' => $Id_Orden_Produccion);

        $query->execute($parameters);

       return $query->fetchAll();
    }
     public function estadoTarea($Id_Tarea,$estado,$estadoActual)
    {
        if ($estado=="1") {
            if ($estadoActual==1) {
                $sql = "UPDATE tarea SET Estado_Tarea = 2 WHERE Id_Tarea = :Id_Tarea";
                $query = $this->db->prepare($sql);
                $parameters = array(':Id_Tarea' => $Id_Tarea);
                $query->execute($parameters);
            }elseif ($estadoActual==2) {
                $sql = "UPDATE tarea SET Estado_Tarea = 1 WHERE Id_Tarea = :Id_Tarea";
                $query = $this->db->prepare($sql);
                $parameters = array(':Id_Tarea' => $Id_Tarea);
                $query->execute($parameters);
            }elseif ($estado=="") {
                
            }
        }

        


    }
      public function Calendario2($Id_Operario)
    {
        $sql = "SELECT Id_Tarea,Id_Orden_Produccion, CONCAT(Tarea, ' Para el producto ', Producto) as title,e.Estado,Estado_Tarea,Fecha_Tarea as start FROM tarea t
        INNER JOIN producto p ON  (p.Id_Producto=t.Id_Producto)
        INNER JOIN estado e ON (e.Id_Estado=t.Estado_Tarea)
        Where Id_Operario= :Id_Operario and t.Estado_Tarea=1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Operario' => $Id_Operario);

        $query->execute($parameters);

       return $query->fetchAll();
    }

}