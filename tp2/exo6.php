<!DOCTYPE html>
<html>
<head>
    <title>Entrée d'un nombre entier</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    donnez un nombre entier : <input type="text" name="nbr">
    <input type="submit" >
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre=$_REQUEST['nbr'];
            ($i=1);
            while($i<=10){
                $x=$i*$nombre;
                echo "$i * $nombre = $x <br>";
                $i++;
            }
        }
    ?>
</body>
</html>
