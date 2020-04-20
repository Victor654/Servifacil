<?php

namespace Mini\Model;

use Mini\Core\Model;

class Pieza extends Model
{
     public function getPieza()
    {

        $sql = "SELECT * FROM pieza";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }
 public function getAllPieza($valor)
    {

        if ($valor!=null) {
        $sql = "SELECT * FROM pieza
        WHERE Id_Pieza Like '%".$valor."%' or Pieza Like '%".$valor."%'";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
    }elseif($valor==null){
        $sql = "SELECT * FROM pieza";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();
        }       
    }
  public function addPieza($pieza)
    {

         $sql = "INSERT INTO pieza VALUES ('','$pieza')";
        $query = $this->db->prepare($sql);
        $query->execute();
    }
     public function getProducto($Id_Pieza)
    {
        $sql = "SELECT Id_Pieza, Pieza FROM pieza WHERE Id_Pieza = :Id_Pieza LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id_Pieza' => $Id_Pieza);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }
     public function updatePieza($id, $pieza)
    {
        $sql = "UPDATE pieza SET Id_Pieza = :id, Pieza= :pieza WHERE Id_Pieza = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id, ':pieza' => $pieza);

        $query->execute($parameters);
    }

}