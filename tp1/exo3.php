<?php
$note1=0;
$note2=19;
$moyenne=($note1+$note2)/2;
$appreciation="";
if ($moyenne>16){
    $appreciation= "Trés bien !";
}
else if ($moyenne>10){
    $appreciation= "Bien !";
}
else {
    $appreciation= "Ajourné !";
}
echo "note1 = $note1 <br>note2 = $note2<br>moyenne = $moyenne <br> appreciation = $appreciation "
?>