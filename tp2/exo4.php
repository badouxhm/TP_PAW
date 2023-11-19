<html>
    <head>
        <style>
            table{
                border: 1px solid black;
                border-collapse: collapse;
            }
            tr{
                border: 1px solid black;
            }
            td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
        <?php
            $nom["moh"]="14";
            $nom["ali"]="13";
            $nom["asma"]="9";
            $nom["farid"]="8";
            $nom["khalil"]="15";
            $nom["mounir"]="7";
            $nom["fathi"]="5";
            $nom["makach"]="0";
            $nom["younes"]="17";
            $nom["zahir"]="0";
            $x=0;
            $nbrEtu=count($nom);
            foreach($nom as $key => $valeur){
                $x+=$valeur;
            }
            $moyenne=$x/$nbrEtu;
            $major="moh";
            $majorNote=$nom[$major];
            foreach($nom as $key => $valeur){
                if($valeur > $majorNote){
                    $major = $key;
                }
            }
            foreach($nom as $key => $valeur){
                if($valeur==0){
                    $exclu[]=$key;
                } 
            }
            $ex="";

            foreach($exclu as $key => $valeur){
                $ex=$ex." , ".$valeur;
            }
                echo "<tr><td>Le nombre d'etudiants </td> <td>$nbrEtu</td>";
                echo "<tr><td>La moyenne générale du groupe </td> <td>$moyenne</td>";
                echo "<tr><td>Le major de la promotion </td> <td>$major</td>";
                echo "<tr><td>Les étudiants exclus</td><td>$ex</td></tr>";

        ?>
        </table>
    </body>
</html>