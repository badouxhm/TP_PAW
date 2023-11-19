<?php
$prixProduit1=150.75;
$prixProduit2=130.50;
$total=$prixProduit1+$prixProduit2;
$tva=$total*20/100;
$ttc=$total+$tva;
echo "le total : $total <br>TVA : $tva <br>TTC : $ttc";
?>
