<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión o registrarse</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      width: 300px;
      margin: 0 auto;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .form-footer {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <form name="login" action="" method="POST">
    <h2>Iniciar sesión</h2>
<div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="Nombre" required>
  </div>
<div>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>
  </div>
    <input type="submit" name="enviar">
  
    <div class="form-footer">
      ¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.
    </div>
  </form>
  
<?php
include 'conexion.php';

if ($_SERVER ["REQUEST_METHOD"]=="POST"){

  $usuario= $_POST['usuario'];
  $password = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña ='$contraseña'";

  $rsconsulta =mysqli_query($con,$consulta);

  if(mysqli_num_rows($rsconsulta)>0) {
    echo "inicio de sesion exitoso";

  }else {
    echo"inicio de sesion fallido";

  }
}

?>
  </body>
</html>