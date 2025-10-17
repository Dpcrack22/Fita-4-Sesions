<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex43pagina1.php</title>
    <style>
        a {
            text-decoration: none;
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border: 1px solid #000;
            margin: 2px;
            background-color: #f0f0f0;
            color: #000;
        }
        a:hover {
            background-color: #c0c0c0;
        }
        input[readonly] {
            width: 300px;
            font-size: 16px;
            padding: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <form>
        <label for="teclat">Teclat Virtual:</label>
        <input type="text" id="teclat" name="teclat" value="<?php
            session_start();
            if (!isset($_SESSION['teclat'])) {
                $_SESSION['teclat'] = '';
            }
            if (isset($_GET['lletra'])) {
                $_SESSION['teclat'] .= $_GET['lletra'];
            }
            echo ($_SESSION['teclat']);
        ?>" readonly />
    </form>
    <div>
        <?php
            $lletres = range('A', 'Z'); 
            foreach ($lletres as $lletra) {
                echo '<a href="?lletra=' . $lletra . '">' . $lletra . '</a> ';
                
            }
            echo '<a href="?borrar=1">DEL</a>';
            if (isset($_GET['borrar'])) {
                $_SESSION['teclat'] = '';
            }
        
        ?>
    </div>
</body>
</html>