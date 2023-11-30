<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear cookie</title>
</head>
<body>

    <?php
    setcookie("micookie", "datos de la cookie", time()+45, "DesarrolloWeb/parte_2/cookies");   
    ?>

</body>
</html>