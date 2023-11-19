<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>matricule</th>
            <th>nom</th>
            <th>moyenne</th>
            <th>décsion</th>
        </thead>
        <tbody>
            <?php
                $eleves=array(
                    "Z100"=>array("Mohamed ","module"=>array("Math"=>array("note"=>20,"cof"=>5),"Physique"=>array("note"=>20,"cof"=>2),"Langue"=>array("note"=>20,"cof"=>2))),
                    "Z200"=>array("Salima","module"=>array("Math"=>array("note"=>10,"cof"=>5),"Physique"=>array("note"=>10,"cof"=>2),"Langue"=>array("note"=>10,"cof"=>2))),
                    "Z103"=>array("Ali","module"=>array("Math"=>array("note"=>2,"cof"=>5),"Physique"=>array("note"=>5,"cof"=>2),"Langue"=>array("note"=>7,"cof"=>2))),
                    "Z109"=>array("Hind", "module"=>array("Math"=>array("note"=>13,"cof"=>2),"Physique"=>array("note"=>13,"cof"=>2),"Langue"=>array("note"=>11,"cof"=>2)))
                    );
                    foreach ($eleves as $matricule => $details) {
                        $nom = $details[0];
                        print("<tr> <td>$matricule</td> ");
                        print(" <td>$nom</td> ");

                        $modules = $details["module"];
                        
                        $totalNotes = 0;
                        $totalCoefficients = 0;
                        foreach ($modules as $module) {
                            $totalNotes += $module["note"] * $module["cof"];
                            $totalCoefficients += $module["cof"];
                        }
                        $moyenne = $totalNotes / $totalCoefficients;
                    
                        print(" <td>$moyenne</td> ");
                        if($moyenne>=10){
                            print(" <td>Admis(e)</td> ");
                        }else{
                            print(" <td>Ajourné(e)</td> ");
                        }
                
                    }
            ?>
        </tbody>
        
    </table>
    
</body>
</html>