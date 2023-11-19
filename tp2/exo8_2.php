<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['nbr'];
        if (isset($n)) {
            $j=0;
            for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0){
                $j++;
            } 
            }
            if ($j <= 2){
                echo 'le nombre est premier';
            }
            else {
                echo'le nombre n`est pas premier ';
            }
        }
    }
?>