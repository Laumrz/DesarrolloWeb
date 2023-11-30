
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>

<?php
    require("conexion.php"); 

    $id=$_POST["id_producto"];
    $sec=$_POST["seccion"];
    $prod=$_POST["producto"];
    $org=$_POST["origen"];
    $imp=$_POST["importado"];
    $prec=$_POST["precio"];


    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){
        echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

    $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen, importado, precio)
    VALUES('$id', '$sec', '$prod', '$org', '$imp', '$prec')";
    $resultado = mysqli_query($conexion, $consulta);
    

    if($resultado==false){
        echo "Erro de ejecucion";
    }else{
        echo "el producto fue almacenado con los siguientes datos: <br><br>";
        echo "codigo: " . "$id"."<br>";
        echo "seccion: " . "$sec"."<br>";
        echo "producto: " . "$prod"."<br>";
        echo "origen: " . "$org"."<br>";
        echo "importado: " . "$imp"."<br>";
        echo "precio: " . "$prec"."<br>";
    }

        mysqli_close($conexion)
    ?>

</body>
</html>