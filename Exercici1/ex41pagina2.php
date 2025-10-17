<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex41pagina2</title>
</head>
<body>
    <p>NOMBRE ENREGISTRAT</p>
    <a href="ex41pagina3.php">Endevinar</a>
    <?php
        session_start();

        $_SESSION['ocult'] = $_POST['ocult'];
    ?>
</body>
</html>