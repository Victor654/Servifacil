<?php

namespace Mini\Model;

use Mini\Core\Model;

class Filtro extends Model
{
 public function filtroProducto($valor)
    {

        $sql = "SELECT * FROM producto WHERE Referencia Like'%".$valor."%' or Producto Like '%".$valor."%'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $arreglo = array();
        while ($re= $query->fetch_array()) {
        	$arreglo[]=$re;
        }
        
        return $arreglo;
    }

}


?>

