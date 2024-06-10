<!DOCTYPE html>
<html lang="es">
<head>

       <title>Registro</title>
        <style>
            /* Estilo simple para el formulario */
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                background-color: #4caf50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <form>
            <h2>Registro</h2>
        <div>
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
         
            <input type="submit" value="Registrarse">
        </form>
    <?php
    $nombre:$_POST ['Nombre'];
    $correo=$_POST ['email'];
    $clave = $_POST['password'];
    include 'conexion.php';
    $consulta="insert into usuarios(nombre_usuario,correo,contraseña) values ($nombre,$correo,$clave);"
    $rsconsulta = mysqli_query($con,$consulta);
?>
    </body>
    </html> 
    
    