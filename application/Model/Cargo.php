<?php

namespace Mini\Model;

use Mini\Core\Model;

class Cargo extends Model
{
 public function getCargo()
    {

        $sql = "SELECT * FROM cargo";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }

}
?>