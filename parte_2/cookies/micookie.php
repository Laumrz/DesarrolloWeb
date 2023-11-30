<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leer cookie</title>
</head>
<body>

    <?php
    if (isset($_COOKIE["micookie"])) {
        echo $_COOKIE["micookie"] . "<br>";
    } else {
        echo "usted no ha creado cookies" . "<br>";
    }
    
    //echo $_COOKIE["micookie"];

    ?>
    
</body>
</html>