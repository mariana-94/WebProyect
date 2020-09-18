
<?php
//conexion a la base de datos
global $conec;
					              // localhost, user, password
$conec = mysqli_connect("localhost", "root", "");
mysqli_select_db($conec, "datosbd");

//conjunto de caraxcteres (charset)
mysqli_query($conec, "set names utf8mb4") or die(mysqli_error($conec));
?>
