<form method= 'POST' action="<?php echo $_SERVER['PHP_SELF'];?>">
donner un nombre entier positif : <input type="text" name='nbr'>
<input type="submit" >
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $n=$_REQUEST['nbr'];
    $x=0;
    if ($n<0){
        echo 'ERREUR';
        exit;
    }
    
    for ($i=1;$i<$n;$i++){
        if ($i%2==0){
            $x += $i;
        }
    }
    echo 'LA SOMME DES NOMBRES PAIRS EST : ' .$x ;
}
?>
