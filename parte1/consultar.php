<?php
require("conexion.php");
function ejecutar_consulta($laconsulta){
    global $conexion; 
    $consulta = "SELECT * FROM productos WHERE producto LIKE '%$laconsulta%'";
    $resultado = mysqli_query($conexion, $consulta);

    return $resultado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<h2>Consultar productos</h2>

<body>

    <?php
    $mibusqueda = isset($_GET["buscar"]) ? $_GET["buscar"] : null;
    $mipagina = $_SERVER["PHP_SELF"]; 

    if ($mibusqueda != NULL) {
        $resultados = ejecutar_consulta($mibusqueda);

        echo "<form action='".$mipagina."' method='get'>
            <input type='text' name='buscar' placeholder='buscar por nombre..' value='".$mibusqueda."'></label> 
            <input type='submit' name='search' value='Enviar'> 
        </form>";
    } else {
        echo "<form action='".$mipagina."' method='get'>
            <input type='text' name='buscar' placeholder='buscar..'></label> 
            <input type='submit' name='search' value='Enviar'> 
        </form>";
    }
    ?>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Seccion</th>
            <th>Producto</th>
            <th>Origen</th>
            <th>Importado</th>
            <th>Precio</th>
        </tr>
        <?php
        if ($mibusqueda != NULL) {
            while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $fila['id_producto'] . "</td>";
                echo "<td>" . $fila['seccion'] . "</td>";
                echo "<td>" . $fila['producto'] . "</td>";
                echo "<td>" . $fila['origen'] . "</td>";
                echo "<td>" . $fila['importado'] . "</td>";
                echo "<td>" . $fila['precio'] . "</td>";
                echo "</tr>";
            }
        } 
        ?>
    </table>
    
</body>
</html>
