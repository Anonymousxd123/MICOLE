
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>MiCole</title>

    <!-- Bootstrap core CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="boostrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="boostrap/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="boostrap/css/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        
      <form action="../modelo/validacion_user.php" method="POST" class="form-signin">
        <h2 class="form-signin-heading" style="text-align:center;">Iniciar sesión</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Email" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Constraseña</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Comencemos</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="boostrap/css/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
