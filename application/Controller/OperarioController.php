<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;
use Mini\Model\Tarea;
use Mini\Model\user;
use Mini\Model\user_session;
use Mini\Model\Operario;


class OperarioController
{
    //Menu Principal
    public function menuO()
    {
        $userSession = new user_session();
        $Usuario= new Operario();
        $Usuario= $Usuario->getOperario($_SESSION['user3']);
        // load views
        require APP . 'view/_templates/header3.php';
        require APP . 'view/operario/menuO.php';
        require APP . 'view/_templates/footer.php';
    }
////////////////////////////////////////////////////////////////////////
    //Tarea
     public function listarTarea($Id_Operario)
    {

            $Tarea= new Tarea();
            $registros=$Tarea->getTarea($Id_Operario);
            echo json_encode($registros);

    }
    public function cambiarEstadoTarea(){

        $userSession = new user_session();

         if (isset($_POST["submit_cambiarEstado"])) {

           foreach ($_POST["Tarea_Id"] as $key => $id) {
               $Tarea= new Tarea();
               $Tarea->estadoTarea($id, $_POST["estado"][$key], $_POST["estadoActual"][$key]);
            }
        }

        header('location: ' . URL . 'operario/menuO');
    }
    
             public function Calendario2()
    {
            $userSession = new user_session();

            $Calendario = new Tarea(); 
            $registros = $Calendario->Calendario2($_SESSION['user3']);
            echo json_encode($registros);
    }
//////////////////////////////////////////////////////////////////////////
  
}
