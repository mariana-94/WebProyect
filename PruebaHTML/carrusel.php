<?php
require("conexion.php");
$sql=("select ruta from imagenes");
$query=mysqli_query($mysqli,$sql);

 while($arreglo=mysqli_fetch_array($query)){
   echo "
        <img src='$arreglo[0]'  class='d-block w-100' width='2000' height='500'>
   ";
 }
 ?>
