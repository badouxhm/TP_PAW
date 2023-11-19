<?php
$temperature = 82.4 ;
$unite ="C";
if ($unite =="C"){
    $temperature = ($temperature*9/5)+32;
    $unite ="F";
}
else {
    $temperature = ($temperature-32)*5/9;
    $unite ="C";
}
echo "la temperature est : $temperature $unite";
?>
