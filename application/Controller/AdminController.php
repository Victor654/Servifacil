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

use Mini\Model\Cliente;
use Mini\Model\Usuario;
use Mini\Model\Producto;
use Mini\Model\TipoProducto;
use Mini\Model\Fase;
use Mini\Model\Pieza;
use Mini\Model\PiezaHasFase;
use Mini\Model\Operario;
use Mini\Model\Cargo;
use Mini\Model\FichaTecnica;
use Mini\Model\Estado;
use Mini\Model\EstadoOp;
use Mini\Model\Op;
use Mini\Model\DetalleOp;
use Mini\Model\Tarea;
use Mini\Model\user;
use Mini\Model\user_session;
use Mini\Model\Filtro;
use Mini\Model\Reportes;

class AdminController
{
   //Menu Principal
    public function menuA()
    {
        $userSession = new user_session();
        $Usuario= new Usuario();
        $Usuario= $Usuario->getUsuario($_SESSION['user']);
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/menuA.php';
        require APP . 'view/_templates/footer.php';
    }
//////////////////////////////////////////////////////////////////
    //Empleado
    public function Empleado()
    {
    $valor="";
    $userSession = new user_session();

    $Usuario = new Usuario();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Usuario = $Usuario->getAllUsuario($valor);
        }else{
        $Usuario = $Usuario->getAllUsuario($valor);
        }

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Empleado.php';
        require APP . 'view/_templates/footer.php';
    }
         public function regEmpleado()
    {
        $userSession = new user_session();

        $Cargo = new Cargo;
        $Cargo = $Cargo->getCargo();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regEmpleado.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addUsuario()
    {
        $userSession = new user_session();
         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addUsuario"])) {
            // Instance new Model (Song)
             $Usuario = new Usuario();
            // do addSong() in model/model.php
           $Usuario->addUsuario($_POST["id"], $_POST["nombre"],  $_POST["clave"], $_POST["email"], $_POST["id_estado"], $_POST["id_cargo"]);

        }
        header('location: ' . URL . 'admin/Empleado');
    }

     public function editusuario($Id_Usuario)
    {
        $userSession = new user_session();

         if (isset($Id_Usuario)) {
            // Instance new Model (Song)
            $Usuario = new Usuario();
            // do getSong() in model/model.php
            $Usuario = $Usuario->getUsuario($Id_Usuario);

            // If the song wasn't found, then it would have returned false, and we need to display the error page
            if ($Usuario === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }else{
                $Estado = new Estado();
                $Estado = $Estado->getEstado();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editEmpleado.php';
        require APP . 'view/_templates/footer.php';
            }
        }
    }

    public function updateUsuario()
    {
        $userSession = new user_session();
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_UpdateUsuario"])) {
            // Instance new Model (Song)
            $Usuario = new Usuario();
            // do updateSong() from model/model.php
            $Usuario->updateUsuario($_POST["id"], $_POST["nombre"],  $_POST["clave"], $_POST["email"], $_POST["id_estado"], $_POST["id_cargo"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'admin/Empleado');
    }

    public function cambiarEstado($Id_Usuario, $Id_Estado){
        $userSession = new user_session();

        $Usuario= new Usuario();
        $Usuario=$Usuario->estadoUsuario($Id_Usuario,$Id_Estado);

        header('location: ' . URL . 'admin/Empleado');
    }

//////////////////////////////////////////////////////////////////
    //Cliente
    public function Cliente()
    {

    $valor="";

    $userSession = new user_session();

    $Cliente = new Cliente();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Cliente = $Cliente->getAllCliente($valor);
        }else{
        $Cliente = $Cliente->getAllCliente($valor);
        }

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Cliente.php';
        require APP . 'view/_templates/footer.php';
    }

     public function regCliente()
    {
        $userSession = new user_session();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regCliente.php';
        require APP . 'view/_templates/footer.php';
    }
    public function editCliente($Id_Cliente)
    {
        $userSession = new user_session();

         if (isset($Id_Cliente)) {
            // Instance new Model (Song)
            $Cliente = new Cliente();
            // do getSong() in model/model.php
            $Cliente = $Cliente->getCliente($Id_Cliente);

            // If the song wasn't found, then it would have returned false, and we need to display the error page
            if ($Cliente === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }else{
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editCliente.php';
        require APP . 'view/_templates/footer.php';
            }
        }
    }

    public function updateCliente()
    {
        $userSession = new user_session();
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_updateCliente"])) {
            // Instance new Model (Song)
            $Cliente = new Cliente();
            // do updateSong() from model/model.php
            $Cliente->updateCliente($_POST["id"], $_POST["nombre"], $_POST["nomc"],  $_POST["numc"], $_POST["direccion"], $_POST['email'],  $_POST['tel'], $_POST['tipo_id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'admin/Cliente');
    }

       public function addCliente()
    {
         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addCliente"])) {
            // Instance new Model (Song)
             $Cliente = new Cliente();
            // do addSong() in model/model.php
           $Cliente->addCliente($_POST["id"],  $_POST["nombre"],  $_POST["nomc"],  $_POST["numc"], $_POST["direccion"], $_POST["email"], $_POST["tel"], $_POST["tipo_id"]);

        }

        // where to go after song has been added
        header('location: ' . URL . 'admin/Cliente');

    }
/////////////////////////////////////////////////////////////////////////////////
    //Operario
    public function Operario()
    {

        $valor = "";
        $userSession = new user_session();

        $Operario = new Operario();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Operario = $Operario->getAllOperario($valor);
        }else{
        $Operario = $Operario->getAllOperario($valor);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Operario.php';
        require APP . 'view/_templates/footer.php';
    }
        public function regOperario()
    {
        $userSession = new user_session();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regOperario.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addOperario(){
        $userSession = new user_session();

        if (isset($_POST["submit_addOperario"])) {
        $Operario = new Operario();
            // do addSong() in model/model.php
           $Operario->addOperario($_POST["id"], $_POST["nombre"], $_POST["email"], $_POST["id_estado"]);
        }
        header('location: ' . URL . 'admin/Operario');
    }
    public function factura(){
        $userSession = new user_session();
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/reg.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function updateOperario()
    {
        $userSession = new user_session();

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_updateOperario"])) {
            // Instance new Model (Song)
            $Operario = new Operario();
            // do updateSong() from model/model.php
            $Operario->updateOperario($_POST["id"], $_POST["nombre"], $_POST["email"], $_POST["id_estado"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'admin/Operario');
    }
    public function editoperario($Id_Operario)
    {
        $userSession = new user_session();

         if (isset($Id_Operario)) {
            // Instance new Model (Song)
            $Operario = new Operario();
            // do getSong() in model/model.php
            $Operario = $Operario->getOperario($Id_Operario);

            // If the song wasn't found, then it would have returned false, and we need to display the error page
            if ($Operario === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }else{
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editOperario.php';
        require APP . 'view/_templates/footer.php';
            }
        }
    }
    public function cambiarEstado2($Id_Operario, $Id_Estado){
        $userSession = new user_session();

            $Operario= new Operario();
            $registros=$Operario->estadoOperario($Id_Operario, $Id_Estado);
            echo json_encode($registros);

            header('location: ' . URL . 'admin/Operario');
    }

//////////////////////////////////////////////////////////////////////////////////////////
    //Pieza
        public function Pieza()
    {
        $valor="";
        $userSession = new user_session();

        $Pieza = new Pieza();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Pieza = $Pieza->getAllPieza($valor);
        }else{
        $Pieza = $Pieza->getAllPieza($valor);
        }


        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Pieza.php';
        require APP . 'view/_templates/footer.php';
    }
        public function regPieza()
    {
        $userSession = new user_session();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regPieza.php';
        require APP . 'view/_templates/footer.php';
    }
     public function addPieza()
    {
        $userSession = new user_session();
         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addPieza"])) {
           foreach ($_POST["Pieza"] as $key => $pieza) {
               $Pieza= new Pieza();
               $Pieza->addPieza($pieza);
            }
        }
            header('location: ' . URL . 'admin/Pieza');
    }
        public function editPieza($Id_Pieza)
    {
        $userSession = new user_session();

         if (isset($Id_Pieza)) {
            // Instance new Model (Song)
            $Pieza = new Pieza();
            // do getSong() in model/model.php
            $Pieza = $Pieza->getProducto($Id_Pieza);

            if ($Pieza === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }else{
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editPieza.php';
        require APP . 'view/_templates/footer.php';
            }
        }
    }
         public function updatePieza()
    {
        $userSession = new user_session();

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_updatePieza"])) {
            // Instance new Model (Song)
            $Pieza = new Pieza();
            // do updateSong() from model/model.php
            $Pieza->updatePieza($_POST["id"], $_POST["pieza"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'admin/Pieza');
    }
///////////////////////////////////////////////////////////////////////////////////////////////
     //Tipo
    public function regTipoProducto()
    {
        $userSession = new user_session();

        $TipoProducto = new TipoProducto();
        $TipoProducto = $TipoProducto->getAllTipo();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regTipoProducto.php';
        require APP . 'view/_templates/footer.php';
    }
        public function addTipo()
    {
        $userSession = new user_session();

         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addTipo"])) {

           foreach ($_POST["tipo_producto"] as $key => $id) {
               $tipo_producto= new TipoProducto();
               $tipo_producto->addTipo( $id);
           }

            }
            header('location: ' . URL . 'admin/regTipoProducto');
    }
    public function editTipo($Id_Tipo_Producto)
    {
        $userSession = new user_session();

         if (isset($Id_Tipo_Producto)) {
            // Instance new Model (Song)
            $tipo_producto = new TipoProducto();
            // do getSong() in model/model.php
            $tipo_producto = $tipo_producto->getTipo($Id_Tipo_Producto);

           
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editTipoProducto.php';
        require APP . 'view/_templates/footer.php';
            }
    }
    public function updateTipo()
        {
            $userSession = new user_session();

            // if we have POST data to create a new song entry
            if (isset($_POST["submit_updateTipo"])) {
                // Instance new Model (Song)
                $tipo_producto = new TipoProducto();
                // do updateSong() from model/model.php
                $tipo_producto->updateTipo($_POST["id"], $_POST["tipo_producto"]);
            }

            // where to go after song has been added
            header('location: ' . URL . 'admin/regTipoProducto');
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Producto
    public function Producto()
    {
        $valor="";
        $userSession = new user_session();

        $Producto = new Producto();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Producto = $Producto->getAllProducto($valor);
        }else{
        $Producto = $Producto->getAllProducto($valor);
        }

        $Fase = new Fase();
        $Fase = $Fase->getFase();

        $Pieza = new Pieza;
        $Pieza = $Pieza->getPieza();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Producto.php';
        require APP . 'view/_templates/footer.php';
    }
      
        public function regProducto()
    {
        $userSession = new user_session();

        $TipoProducto = new TipoProducto();
        $TipoProducto = $TipoProducto->getAllTipo();

        $Fase = new Fase();
        $Fase = $Fase->getFase();

        $Pieza = new Pieza;
        $Pieza = $Pieza->getPieza();


        $numero = new Producto();
        $numero = $numero->Numero_Id();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regProducto.php';
        require APP . 'view/_templates/footer.php';
    }
     public function addProducto()
    {
        $userSession = new user_session();

         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addproducto"])) {
            $Producto = new Producto();
            $Producto->addProducto($_POST["referencia"], $_POST["producto"],  $_POST["descripcion"], $_POST["tipo_producto"]);

           foreach ($_POST["Pieza_id"] as $key => $id) {
               $pf= new PiezaHasFase();
               $pf->addPiezaHasFase($_POST["id"], $id, $_POST["Fase_Id"][$key]);
           }
            $Ficha = new FichaTecnica();
            $Ficha->addFicha($_POST["id"],$_POST["id"],$_POST["id"]);

            }
            header('location: ' . URL . 'admin/Producto');
           }


     public function updateProducto()
    {
        $userSession = new user_session();

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_updateProducto"])) {
            // Instance new Model (Song)
            $Producto = new Producto();
            // do updateSong() from model/model.php
            $Producto->updateProducto($_POST["id"], $_POST["producto"],  $_POST["descripcion"], $_POST["tipo_producto"],$_POST["referencia"]);
        }

         header('location: ' . URL . 'admin/Producto');
        
    }

    public function editProducto($Id_Producto)
    {
        $userSession = new user_session();

         if (isset($Id_Producto)) {
            $Producto = new Producto();
            $Producto = $Producto->getProducto($Id_Producto);

            if ($Producto === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }else{
        $numero = new Producto();
        $numero = $numero->Numero_Id();

        $TipoProducto = new TipoProducto();
        $TipoProducto = $TipoProducto->getAllTipo();



        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editProducto.php';
        require APP . 'view/_templates/footer.php';
            }
        }
    }

     public function listarFicha($Id_Producto)
    {
            $userSession = new user_session();

            $PiezaHasFase = new PiezaHasFase(); 
            $registros = $PiezaHasFase->getPiezaHasFase($Id_Producto);
            echo json_encode($registros);

    }
         public function listarProducto($Id_Orden_Produccion)
    {
            $userSession = new user_session();

            $producto2 = new producto(); 
            $registros = $producto2->getProducto2($Id_Orden_Produccion);
            echo json_encode($registros);

    }
   
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Op  
     
    public function Op()
    {
        $valor="";
        $userSession = new user_session();

        $Op = new Op();
        $Producto = new Producto();
        if (isset($_POST["btnBuscar"])) {
            $valor=$_POST["valor"];
            $Op = $Op->getAllOp($valor);
        }else{
        $Op = $Op->getAllOp($valor);
        }

        $Clientes = new Cliente;
        $Clientes = $Clientes->getClientes();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/Op.php';
        require APP . 'view/_templates/footer.php';
    }

            public function regOp()
    {
        $userSession = new user_session();
        // load views
        $Clientes = new Cliente;
        $Clientes = $Clientes->getClientes();

        $EstadoOp = new EstadoOp;
        $EstadoOp = $EstadoOp->getEstadoOp();

        $Productos = new Producto;
        $Productos = $Productos->getProductos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regOp.php';
        require APP . 'view/_templates/footer.php';
    }
        public function editOp($Id_Orden_Produccion)
    {
        $userSession = new user_session();

         if (isset($Id_Orden_Produccion)) {
            $Op = new Op();
            $Op = $Op->getOp2($Id_Orden_Produccion);

            $EstadoOp = new EstadoOp;
            $EstadoOp = $EstadoOp->getEstadoOp();

            if ($Op === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/editOp.php';
        require APP . 'view/_templates/footer.php';
            }
    }
         public function updateOp()
    {
        $userSession = new user_session();

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_updateOp"])) {
            // Instance new Model (Song)
            $Op = new Op();
            // do updateSong() from model/model.php
            $Op->updateOp($_POST["id"], $_POST["estado"],  $_POST["fecha"]);
        }

         header('location: ' . URL . 'admin/Op');
        
    }
        public function addOp()
    {
        $userSession = new user_session();
         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addOp"])) {
            // Instance new Model (Song)
            $Op = new Op();
            $Op->addOp($_POST["Id_Op"], $_POST["Fecha"],  $_POST["Estado"]);

           foreach ($_POST["Cliente_Id"] as $key => $id) {
               $dO= new DetalleOp();
               $dO->addDetalleOp($_POST["Id_Op"],$id, $_POST["Producto_Id"][$key],$_POST["Observaciones"][$key],$_POST["Cantidad"][$key]);
           }
            }
            header('location: ' . URL . 'admin/Op');
    }
     public function listarOp($Id_Orden_Produccion)
    {
            $userSession = new user_session();

            $DetalleOp = new DetalleOp(); 
            $registros = $DetalleOp->getDetalleOp($Id_Orden_Produccion);
            echo json_encode($registros);

    }
         public function Calendario()
    {
            $userSession = new user_session();

            $Op = new Op(); 
            $registros = $Op->Calendario();
            echo json_encode($registros);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    //Tareas
    public function Tareas()
    {
        $userSession = new user_session();

        $Op =new Op();
        $Op = $Op-> getOp();

        $Operario =new Operario();
        $Operario = $Operario-> getAllOperario2();

        $Producto =new Producto();
        $Producto = $Producto-> getProductos();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/regTareas.php';
        require APP . 'view/_templates/footer.php';

    }
   public function Addtarea()
    {
        $userSession = new user_session();

         // if we have POST data to create a new song entry
        if (isset($_POST["submit_addtarea"])) {
            
           foreach ($_POST["Operario_Id"] as $key => $id) {
               $Tarea = new Tarea();
               $Tarea->addTarea($_POST["Orden_Produccion_Id"][$key], $id, $_POST["Producto_Id"][$key],$_POST["Fecha"][$key],$_POST["Tarea"][$key]);
           }
            }
            header('location: ' . URL . 'admin/Tareas');
    }
     public function listarTarea($Id_Orden_Produccion)
    {
        $userSession = new user_session();

            $Tarea= new Tarea();
            $registros=$Tarea->getTarea2($Id_Orden_Produccion);
            echo json_encode($registros);

    }
     public function cambiarEstadoTarea(){

        $userSession = new user_session();

         if (isset($_POST["submit_cambiarEstado2"])) {

         foreach ($_POST["Tarea_Id"] as $key => $id) {
               $Tarea= new Tarea();
               $Tarea->estadoTarea($id, $_POST["estado"][$key], $_POST["estadoActual"][$key]);
            }
        }
        header('location: ' . URL . 'admin/Op');
    }


        public function reporteTareas()
    {
        $userSession = new user_session();

        $Operario =new Operario();
        $Operario = $Operario-> getAllOperario3();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/admin/reporteTareas.php';
        require APP . 'view/_templates/footer.php';

    }
//////////////////////////////////////////////////////////////////////////////////////////
    //Reportes
     public function reporteProducto()
    {
        $userSession = new user_session();
        
        require APP . 'view/reportes/reporteProducto.php';    
    }
           public function reporteFicha()
    {
        $userSession = new user_session();

        require APP . 'view/reportes/reporteFicha.php';    
    }
        public function reporteOp()
    {
        $userSession = new user_session();

        require APP . 'view/reportes/reporteOp.php';    
    }
     public function reporteGeneral()
    {
        $userSession = new user_session();

        require APP . 'view/reportes/reporteGeneral.php';    
    }
        public function reporteTarea()
    {
        $userSession = new user_session();

        require APP . 'view/reportes/reporteTarea.php';    
    }
            public function reporteGeneralTarea()
    {
        $userSession = new user_session();

        require APP . 'view/reportes/reporteGeneralTarea.php';    
    }
////////////////////////////////////////////////////////////////////////////////////////////graficos//////
    public function grafico()
    {
        $userSession = new user_session();
        
        require APP . 'view/admin/graficos/grafico.php';
        
    }

}
?>