<!DOCTYPE html>
<?php

include("../controlador/session.php");

if(!($rol_check  == "administrador")){
   header("location: login.php");
   exit();
}

?>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Admininisttrador </title>
	</head>
	<body>
		<h1>Hola admin</h1>
		<form action="logout.php" method="POST">
			 <button class="btn btn-lg btn-primary btn-block" type="submit">Cerrar sesión</button>
		</form>
	</body>
</html>
