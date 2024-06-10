<?php
$servername ="localhost";
$username ="root";
$password ="";
$bd ="republica";


$con =mysqli_connect($servername,$username,$password,$bd)or die ("Error al conectarte a la base de datos".mysqli_connect_error);
?>