<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex42pagina3</title>
</head>
<body>
    

    <h2>COINCIDÈNCIES</h2>
    <?php
        session_start();

        $frase1 = isset($_SESSION['frase1']) ? strtolower($_SESSION['frase1']) : '';
        $frase2 = isset($_POST['frase2']) ? strtolower($_POST['frase2']) : '';

        $paraules1 = explode(' ', $frase1);
        $paraules2 = explode(' ', $frase2);

        $coincidencies = array_intersect($paraules1, $paraules2);

        if (!empty($coincidencies)) {
            foreach ($coincidencies as $paraula) {
                echo "<p>La paraula \"$paraula\" està a les dues frases.</p>";
            }
        } else {
            echo "<p>No hi ha cap coincidència.</p>";
        }
    ?>
    <a href="ex42pagina1.php">Tornar a ex42pagina1.php</a>
</body>
</html>