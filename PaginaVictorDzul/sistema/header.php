<?php
require "vendor/autoload.php";
   session_start();
echo <<<_INIT
 
<!DOCTYPE html>
<html>
   <head>
      <meta charset= 'utf-8'>
      <meta name='viewport' content='width=device-width,
      initial-sacle=1'>
      <!--<link rel="stylesheet" href="bootstrap/bootstrap.min.css">-->
      <link rel='stylesheet' href='styles.css' type='text/css'>
      <script src="node_modules\jquery.min.js"></script>
      <script src="bootstrap/popper.min.js"></script>
      <script src="bootstrap/bootstrap.min.js"></script>
      
_INIT;
   require_once 'functions.php';
   $userstr = 'Bienvenido Usuario';
   if (isset($_SESSION['user'])) {
      $user     = $_SESSION['user'];
      $loggedin =  TRUE;
      $userstr  = "Secion de: $user";
   }
   else $loggedin = FALSE;

echo <<<_MAIN
      <title>BikeStore</title>
   </head>
   <body>
      <div>
         <div>
            <div id= 'logo' class='center'>Servicio De Bicicletas
            <img src="../img/bici.png" class="imglogo"></div>
            <div class='username'>$userstr</div> 
         </div>
         <div>
_MAIN;
   if ($loggedin){
echo <<<_LOGGEDIN
         <div class='center'>
            <a class="btn btn-outline-danger" href='home.php'>Home</a>
            <a class="btn btn-outline-danger" href='modelo.php'>Bicicletas</a>
            <a class="btn btn-outline-danger" href='llantas.php'>Llantas</a>
            <a class="btn btn-outline-danger" href='Asientos.php'>Asientos</a>
            <a class="btn btn-outline-danger" href='cuadros.php'>Cuadros</a>
            <a class="btn btn-outline-danger" href='logout.php'>Log out</a>
             
         </div>      
_LOGGEDIN;
   }
      else {//poner la direccion de tu CV para mandar en la linea 55 cambialo por los ...
echo <<<_GUEST
         <div class='center'>
            <a class="btn btn-outline-danger" href='index.php'>Home</a>
            <a class="btn btn-outline-danger" href='signup.php#registro'>Registrarse</a>
            <a class="btn btn-outline-danger" href='login.php#ini'>Iniciar seción</a>     
         </div>
         <br>

         <strong><p class='info'>(Registrate para poder contratar nuestro servicios)</p></strong>
_GUEST;        
   }
?>