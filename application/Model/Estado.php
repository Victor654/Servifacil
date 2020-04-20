<?php

namespace Mini\Model;

use Mini\Core\Model;

class Estado extends Model
{
 public function getEstado()
    {

        $sql = "SELECT * FROM estado";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }

}
?>