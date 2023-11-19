<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $tableau=array(
        "in1"=>array("type"=>"radio","name"=>"civilite",array("Mr"=>"Monsieur","Mme"=>"Madam
        e")),
        "in2"=>array("type"=>"text","name"=>"auteur"),
        "in3"=>array("type"=>"text","name"=>"prenom"),
        "in6"=>array("type"=>"text","name"=>"Test"),
        "in5"=>array("type"=>"select","name"=>"civilite",array("Mr"=>"Monsieur","Mme"=>"Madame
        ")),
        "in4"=>array("type"=>"checkbox","name"=>"langue",array("ar"=>"AR","fr"=>"FR","en"=>"E
        N")));

        foreach($tableau as $form => $type){
            if ($type["type"] == "radio"){
                $label = $type["name"];
                $t=$type['type'];
                $info=$type[2];
                print("<label> $label </label>");
                foreach( $info as $elemnts=>$x){
                    print("<input type='radio' value='$x'>");
                }
            }
        }
    ?>
</body>
</html>