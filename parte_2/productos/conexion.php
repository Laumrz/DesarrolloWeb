<?php
$db_host= "localhost";
$db_nombre= "usuario";
$db_usuario= "root";
$db_contra= "";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


//fallo ubicacion
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}

//fallo de datos
mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

mysqli_close($conexion)
?>