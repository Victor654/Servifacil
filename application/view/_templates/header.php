  <?php 
if(!isset($_SESSION['user'])){
header('location: ' . URL);
}
if(isset($_SESSION['user2'])){
header('location: ' . URL . 'jefe/menuJ');
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
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/materialize.css">
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
<body style=" display: flex;min-height: 100vh;flex-direction: column;" class ="grey darken-4">
 <nav class="blue-grey lighten-5">
    <div class="nav-wrapper">
      <img src="<?php echo URL; ?>img/logo.png" class="right" width="300px" height="65px">
    </div>
  </nav>
   <ul id="slide-out" class="right side-nav fixed" style="background: #FFFFF0">
        <li>
          <br>  
          <a title="Volver al menú principal"  href="<?php echo URL; ?>admin/menuA" ><img class="responsive-img" style="width: 120px; height: 130px;" src="<?php echo URL; ?>/img/admin.png"/></a>
          <br>
          <a href="<?php echo URL; ?>admin/menuA"></a>
        </li>
        <li>
          <a class='dropdown-trigger waves-effect waves-teal' href='#' data-target='dropdown1'>Usuarios<i class="material-icons">keyboard_arrow_down</i></a>
        </li>
         <ul id='dropdown1' class='dropdown-content'>
          <li class="bold"></li>
          <li class="bold"><a href="<?php echo URL; ?>admin/Empleado" class="waves-effect waves-teal">Directivos</a></li>
          <li class="bold"><a href="<?php echo URL; ?>admin/Operario" class="waves-effect waves-teal">Operarios</a></li>
        </ul>
        <li class="bold"><a href="<?php echo URL; ?>admin/grafico" class="waves-effect waves-teal">Dashboard</a></li>
      <li class="bold"><a href="<?php echo URL; ?>admin/Cliente" class="waves-effect waves-teal">Clientes</a></li>
      <li class="bold"><a href="<?php echo URL; ?>admin/Pieza" class="waves-effect waves-teal">Piezas</a></li>
      <li class="bold"><a href="<?php echo URL; ?>admin/Producto" class="waves-effect waves-teal">Productos</a></li>
      <li class="bold"><a href="<?php echo URL; ?>admin/Op" class="waves-effect waves-teal">Realizar Venta</a></li>
        <li><a class='dropdown-trigger waves-effect waves-teal' href='#' data-target='dropdown2'>Tareas<i class="material-icons">keyboard_arrow_down</i></a></li>
        </li>
         <ul id='dropdown2' class='dropdown-content'>
          <li class="bold"></li>
          <li class="bold"><a href="<?php echo URL; ?>admin/Tareas" class="waves-effect waves-teal">Asignar Tareas</a></li>
          <li class="bold"><a href="<?php echo URL; ?>admin/reporteTareas" class="waves-effect waves-teal">Reporte de Tareas</a></li>
        </ul>
      <li class="bold"><a href="<?php echo URL; ?>home/Logout" class="waves-effect waves-teal">Salir</a></li>
      <li class="no-padding">
    </ul>
