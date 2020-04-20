<?php

namespace Mini\Model;

use Mini\Core\Model;

class Reportes extends Model
{
  public function addFicha($idf, $idp, $iddf){
    	$sql = "INSERT INTO ficha_tecnica VALUES (:id, :producto, :fase)";
    	$query = $this->db->prepare($sql);

 		$parameters = array(':id' => $idf, ':producto' => $idp, ':fase' => $iddf);
        $query->execute($parameters);
    }
}