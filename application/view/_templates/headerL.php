  <?php 
if(isset($_SESSION['user'])){
header('location: ' . URL . 'admin/menuA');
}
if(isset($_SESSION['user3'])){
header('location: ' . URL . 'operario/menuO');
}
 ?>
<!DOCTYPE html> 
<html>
   <head>
      <link rel="icon" href="<?php echo URL; ?>img/ico.ico">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/materialize.css">
      <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
  <title>SERVIFACIL</title>
</head>
<main style=" flex: 1 0 auto;">
<body style=" display: flex;min-height: 100vh;flex-direction: column; background: #DCDCDC;">
  <div class="navbar-fixed  grey darken-4">
    <nav>
      <div class="nav-wrapper grey darken-4">
       <a href="<?php echo URL;?>home/index ?>" class="brand-logo center"><img src="<?php echo URL; ?>/img/logo.png" width="270" height="60"></a>
      </div>
    </nav>
  </div>
        
