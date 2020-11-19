<?php
 include("conexion.php");
 extract($_POST);

 // echo "hola";

//var_dump($_POST);exit;
 // $tipo = $datos[0];

 if($tipo==2){

    // $nombre=$datos[1];
    // $correo=$datos[2];
    // $mensaje=$datos[3];

    $sql="INSERT INTO datos (nombre,email,mensaje)
			values ('$name','$email','$mensaje')";
	echo mysqli_query($conec,$sql);

 }
 if($tipo==1){

   $sql="SELECT ruta from imagenes";
   $query=mysqli_query($conec,$sql);

   $active="active";$carusel="";
    while($arreglo=mysqli_fetch_array($query)){
      extract($arreglo);
      $carusel .="
      <div class='carousel-item $active'>
        <img src='$ruta'  class='d-block w-100' width='100%' >
      </div>
      ";$active="";

    }
    echo $carusel;
 }
   // $sql="INSERT INTO datos (nombre,email,mensaje) VALUES ('$nombre','$correo','$mensaje')";
   // //echo $sql;
   // $query=mysqli_query($mysqli,$sql);

    // $resultado=mysqli_query($conec,"INSERT INTO datos (nombre,email,mensaje) VALUES ('$nombre','$correo','$mensaje') ") or die (mysqli_error($conec));

   // if(!$query)
   // {
   // echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
   // exit();
   // }
   //


//
// if($tipo ==2){
//
// require("conexion.php");
// $sql=("select ruta from imagenes");
// $query=mysqli_query($mysqli,$sql);
//
//  while($arreglo=mysqli_fetch_array($query)){
//    echo "
//         <img src='$arreglo[0]'  class='d-block w-100' width='2000' height='500'>
//    ";
//  }
//
//
// }

 ?>
