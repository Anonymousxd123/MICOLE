<?php

$nomUser = $_POST['inputUser'];
$contrasenia = $_POST['inputPassword'];

include('conexion.php');

$ins = new Conexion();
$con = $ins->conectar();

if ($con){

 	   $user = mysqli_real_escape_string($con,$nomUser);
      $pass = mysqli_real_escape_string($con,$contrasenia); 
      
      // aqui se obtiene el id del usuario se podria usar tambien para obtener el rol 
      // y asi poder valdiar las sesiones en las paginas siguientes 
      $sql = "SELECT * FROM usuarios WHERE user = '$user' and pass = '$pass'";

      //run the store proc
      //$result = mysqli_query($connection,"CALL StoreProcName"));

      $result = mysqli_query($con,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      
      $count = mysqli_num_rows($result);

      if($count == 1) {
         
      	 //obtener un campo del result
      	 //$active = $row['active'];
         $rol = $row['rol'];

         session_start();
         $_SESSION['user_logged'] = $user;
         $_SESSION['rol_logged'] = $rol;

         /*switch ($rol) {
            case 'administrador':
               header("location: ../vistas/administrador.php");
               break;
         }
         */
         
         header("location: ../vistas/usuarios.php");
      }else {
         $error = "Usuario o contraseña incorrecta";
         header("location: ../vistas/login.php");
      }

}
?>
