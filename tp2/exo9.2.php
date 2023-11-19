<?php
$n=$_POST["nbr"];
echo $n;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $up=0;
    $upp=1;
    for($i= 0;$i<$n;$i++){
        if($upp+$up==$i){
            $j[]=$i;
        }
    }
    foreach($j as $v){
        echo "$v <br>";
    }

}
?>