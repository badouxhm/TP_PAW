<?php
$tab = array("bonjour", 3, " tout", -5.4, " monde");
for ($i=0 ; $i < count($tab); $i++){
print("indice $i element = $tab[$i] <br>");
}
print('nombre element = '.count($tab).'<br>');
$tab[5] = "le 6-ieme";
$tab[] = "encore";
echo "******************LE nouveau tableau ************<br/>";
for ($i=0 ; $i < count($tab); $i++)
{
print("indice $i element = $tab[$i] <br>");
}
?>
