<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST["enviar"])){
    try {
        $base = new PDO("mysql:host=localhost; dbname=datos", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM datos_usuario WHERE usuario = :login AND PASSWORD = :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["usuario"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        //$password=password_hash ($password-›getClave(), PASSWORD_DEFAULT);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();

        if ($numero_registro != 0) {
            //si esta registrado se inicia la sesion
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            //header("location:pag_inicio.php");
        } else {
            //header("location:form_acceso.php");
            echo "LOS DATOS DE USUARIO SON INCORRECTOS";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet">
    <title>login</title>
</head>

<body><br><br><br>
    <div class="wrapper">
    <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h1 class="tittle">Inicio</h1>

        <div class="inp">
            <input type="email" name="usuario" class="input" placeholder="correo">
        </div>
        <div class="inp">
            <input type="password" name="password" class="input" placeholder="contraseña">
        </div>
            <input class="submit" type="submit" name="enviar" value= "ENVIAR">
    </form>
    <div></div>
    <div class="banner">
        <h1 class="wel_text">Bienvenido<br/></h1>
        <p class="para">al sistema<br/>:D<br/>login</p>
    </div>
    </div>
</body>
</html>