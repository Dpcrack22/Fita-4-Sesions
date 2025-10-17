<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex41pagina3</title>
</head>
<body>
    <p>ENDEVINA EL NOMBRE</p>
    <?php
        session_start();

        //echo "Ocult:".$_SESSION['ocult'];

        if(!isset($_POST['endevinar'])) {
            echo "<form method='post'>";
            echo "<input type='number' name='endevinar'/>";
            echo "<input type='submit'/>";
            echo "</form>";
        } else {
            $numOcult = $_SESSION['ocult'];
            $numEndevinar = $_POST['endevinar'];
            if ($numEndevinar == $numOcult) {
                echo "<a href='ex41pagina1.php'>Felicitats! El numero és $numOcult</a>";
            } else {
                if ($numEndevinar > $numOcult) {
                    echo "<p>El numero $numEndevinar es mes gran</p>";
                } else {
                    echo "<p>El numero $numEndevinar es mes petit</p>";
                }
                echo "<form method='post'>";
                echo "<input type='number' name='endevinar'/>";
                echo "<input type='submit'/>";
                echo "</form>";
            }
        }
    ?>
</body>
</html>