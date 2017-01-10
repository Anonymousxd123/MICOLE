<?php
   session_start();
   $user_check;
   $rol_check;

   if(!isset($_SESSION['user_logged']) || !isset($_SESSION['rol_logged'])  ){
      header("location: vistas/login.php");
      exit();
   }else{
      $user_check = $_SESSION['user_logged'];
      $rol_check = $_SESSION['rol_logged'];
   }

?>