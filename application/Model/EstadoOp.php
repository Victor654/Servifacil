<?php
namespace Mini\Model;

use Mini\Core\Model;

class EstadoOp extends Model
{
    //Consultar
     public function getEstadoOp()
    {
        $sql = "SELECT * FROM estado_op";
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetchAll();
    }

}
?>
