<?php
namespace Mini\Controller;
use Mini\Model\user;
use Mini\Model\user_session;
use Mini\Model\Usuario;

class HomeController

{
    public function index(){
        $userSession = new user_session();
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function recuperarC(){
        $userSession = new user_session();
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/recuperarC.php';
        require APP . 'view/_templates/footer.php';
    }
     public function recuperarClave()
    {
        $userSession = new user_session();
         // if we have POST data to create a new song entry
        if (isset($_POST["btni"])) {
            // Instance new Model (Song)
             $Usuario = new Usuario();
            // do addSong() in model/model.php
           $Usuario->recuperarClave($_POST["email"],$_POST["id"], $_POST["clave"]);

        }
        header('location: ' . URL . 'home/index');
    }

        public function logout()
    {
    $userSession = new user_session();
    $userSession->closeSession();
    
    header('location: ' . URL . 'home/index'); 
    }

    public function loginA()
    {
        $userSession = new user_session();       
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginA.php';
        require APP . 'view/_templates/footer.php';
    }
    public function loginJ()
    {
        $userSession = new user_session();
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginJ.php';
        require APP . 'view/_templates/footer.php';
    }
    public function loginO()
    {
        $userSession = new user_session();
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginO.php';
        require APP . 'view/_templates/footer.php';
    }


 public function login()
    {
$userSession = new user_session();
$user = new user();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    header('location: ' . URL . 'admin/menuA');

}else if(isset($_POST['id']) && isset($_POST['clave'])){
    
    $userForm = $_POST['id'];
    $passForm = $_POST['clave'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        header('location: ' . URL . 'admin/menuA');
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Datos o Perfil Incorrectos";
         require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginA.php';
        require APP . 'view/_templates/footer.php';
    }
}else{
    //echo "login";
    header('location: ' . URL . 'home/loginA');
}
    }
    
    public function login2()
    {
    $userSession = new user_session();
    $user = new user();

if(isset($_SESSION['user2'])){
    $user->setUser($userSession->getCurrentUser2());
    header('location: ' . URL . 'jefe/menuJ');
}else if(isset($_POST['id']) && isset($_POST['clave'])){
    
    $userForm = $_POST['id'];
    $passForm = $_POST['clave'];

    $user = new user();
    if($user->userExists2($userForm, $passForm)){
        $userSession->setCurrentUser2($userForm);
        $user->setUser($userForm);

    header('location: ' . URL . 'jefe/menuJ');
    }else{
        $errorLogin = "Datos o Perfil Incorrectos";
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginJ.php';
        require APP . 'view/_templates/footer.php';
    }
}else{
    header('location: ' . URL . 'home/loginJ');

  
        }
    }
    
     public function login3()
    {
    $userSession = new user_session();
    $user = new user();

if(isset($_SESSION['user3'])){
    $user->setUser2($userSession->getCurrentUser3());
    header('location: ' . URL . 'operario/menuO');
    }else if(isset($_POST['id'])){
    
    $userForm = $_POST['id'];

    $user = new user();
    if($user->userExists3($userForm)){
        $userSession->setCurrentUser3($userForm);
        $user->setUser2($userForm);

    header('location: ' . URL . 'operario/menuO');
    }else{
        $errorLogin = "Datos o Perfil Incorrectos";
        require APP . 'view/_templates/headerL.php';
        require APP . 'view/home/loginO.php';
        require APP . 'view/_templates/footer.php';
    }
    }else{
    header('location: ' . URL . 'home/loginO');

  
        }
    }
}
?>
