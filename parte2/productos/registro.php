<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <title>Agregar productos</title>
</head>
<body>
    <h1 class="titulo1"> Gestion de productos </h1>
    <div class="main-content">
        <form class="form-reg" method="post" action="insertar_productos.php">

            <div class="titulo2">
                <h1>Agregar producto</h1>
            </div>

            <div class="form-row">
                <label>Codigo</label>
                <input type="text" name="id_producto" id="id_producto">
            </div>

            <div class="form-row">
                <label>Seccion</label>
                <input type="text" name="seccion" id="seccion" >
            </div>

            <div class="form-row">
                <label>Nombre del producto</label>
                <input type="text" name="producto" id="producto" >
            </div>

            <div class="form-row">
                <label>Pais de origen</label>
                <input type="text" name="origen" id="origen" >
            </div>

            <div class="form-row">
                <label>Importado de</label>
                <select name="importado" id="importado">
                    <option>VERDADERO</option>
                    <option>FALSO</option>
                </select>
            </div>

            <div class="form-row">
                <label>Precio</label>
                <input type="text" name="precio" id="precio" >
            </div>

            <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="Enviar">
                <input type="reset" name="borrar" id="borrar" value="Borrar">
            </div>

        </form>
</body>
</html>