<?php

namespace Mini\Model;

use Mini\Core\Model;

class Fase extends Model
{
 public function getFase()
    {

        $sql = "SELECT * FROM fase";
        $stm = $this->db->prepare($sql);
        $stm->execute();

        
        return $stm->fetchAll();
    }

}