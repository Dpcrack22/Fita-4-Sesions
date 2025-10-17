<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex42pagina2</title>
</head>
<body>
    
    <form method="post" action="ex42pagina3.php">
        <label for="frase2">ENREGISTRA FRASE 2</label>
        <input type="text" name="frase2"/>
        <input type="submit"/>
    </form>
    <?php
        session_start();
        if (isset($_POST['frase1'])) {
            $_SESSION['frase1'] = $_POST['frase1'];
        }
    ?>
</body>
</html>