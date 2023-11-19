<?php
$prixUnitaire = 120.99;
$quantite = 5;
$total = $prixUnitaire * $quantite ;
$remise = 0.25;
$montantRemise = $total * $remise ;
$montantFinal = $total - $montantRemise ;
echo "prix untaire : $prixUnitaire <br>quantité : $quantite<br>total : $total <br>remise : $remise<br>montant final : $montantFinal";
?>