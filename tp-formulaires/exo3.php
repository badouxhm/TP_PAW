<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo3.php" method="get">
        <label for="fruits">Fruits :</label>
        <select name="fruit" id="">
        <?php
            $fruits=array(
                "po"=>array("designation"=>"pomme","pu"=>130),
                "ba"=>array("designation"=>"banane","pu"=>170),
                "ki"=>array("designation"=>"kiwi","pu"=>300),
                "or"=>array("designation"=>"orange","pu"=>80),
                "pa"=>array("designation"=>"pastec","pu"=>300),
                "fr"=>array("designation"=>"fraise","pu"=>80)
                );
            foreach($fruits as $d=>$val){
                $f = $val["designation"];
                echo "<option value=".$f.">".$f."</option>";
            }
        ?> 
        </select>
        <br>
        
        <label for="quantité">Quantité :</label>
        <input type="number" name="quantité" >
        <br>
        <button type="submit">calculer le montant </button>
    </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                foreach($fruits as $d=>$val){
                    if ($val["designation"] == $_GET['fruit'] ){
                        $i = $val["pu"];
                    }
                }
                $s = $_GET['quantité'] * $i;
                echo "le montant est de : $s";
            }
        ?>
</body>
</html>

