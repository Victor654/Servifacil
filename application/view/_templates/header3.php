  <?php 
if(isset($_SESSION['user'])){
header('location: ' . URL . 'admin/menuA');
}
if(isset($_SESSION['user2'])){
header('location: ' . URL . 'jefe/menuJ');
}
if(!isset($_SESSION['user3'])){
header('location: ' . URL);
}
 ?>
<!DOCTYPE html> 
<html>
<head>
      <link rel="icon" href="<?php echo URL; ?>img/ico.ico">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/materialize.css">
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/mycss.css">
      <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
       <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>fullcalendar/fullcalendar.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
  <title>SERVIFACIL</title>
</head>
<main style=" flex: 1 0 auto;">
<body style=" display: flex;min-height: 100vh;flex-direction: column; background: #DCDCDC;">
<nav class="grey darken-4">
    <div class="nav-wrapper">
      <img src="<?php echo URL; ?>img/logo.png" class="right" width="300px" height="65px">
    </div>
  </nav>
   <ul id="slide-out" class="right side-nav fixed" style="background: #FFFFF0">
        <li>
          <br>  
          <a href="<?php echo URL; ?>operario/menuO" ><img class="responsive-img" style="width: 170px; height: 150px;" src="<?php echo URL; ?>/img/op.png"/></a>
          <br>
          <a href="<?php echo URL; ?>operario/menuO"></a>
          <br>
        </li>

      <li class="bold"><a href="<?php echo URL; ?>home/Logout" class="waves-effect waves-teal">Salir</a></li>
      <li class="no-padding">
    </ul>



