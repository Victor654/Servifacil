<?php

namespace Mini\Model;

use Mini\Core\Model;


class PiezaHasFase extends Model
{

    public function addPiezaHasFase($id, $pieza, $fase){
    	$sql = "INSERT INTO detalle_fase VALUES (:id, :pieza, :fase)";
    	$query = $this->db->prepare($sql);

 		$parameters = array(':id' => $id, ':pieza' => $pieza, ':fase' => $fase);
        $query->execute($parameters);
    }

    public function getPiezaHasFase($Id_Producto)
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

       return $query->fetchAll();
    }

   
}