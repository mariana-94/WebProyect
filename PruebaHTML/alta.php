<?php
 require("conexion.php");

 $nombre=$_POST['name'];
 $correo=$_POST['email'];
 $mensaje=$_POST['mensaje'];

$sql="INSERT INTO datos (nombre,email,mensaje) VALUES ('$nombre','$correo','$mensaje')";
$query=mysqli_query($mysqli,$sql);

if(!$query)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo"<script language='JavaScript' type='text/javascript'>
  alert(' Exitoso')
  window.location='index.html'
</script>";

 ?>
