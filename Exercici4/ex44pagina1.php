<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="notes">Prendre notes de text:</label><br>
        <textarea name="notes" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Guardar nota">
    </form>

    <?php
        session_start();

        if (!isset($_SESSION['notes'])) {
            $_SESSION['notes'] = '';
        }

        if (isset($_POST['notes']) && !empty(($_POST['notes']))) {
            $_SESSION['notes'] .= ($_POST['notes']) . "\n\n";
        }

        if (!empty($_SESSION['notes'])) {
            echo "<h2>Notes guardades:</h2>";
            echo "<pre>" . ($_SESSION['notes']) . "</pre>";
        }
    ?>
</body>
</html>