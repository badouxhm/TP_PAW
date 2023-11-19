
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select value="">
        <?php
        $options = array(
            'ISIL1',
            'ISIL2',
            'SI1',
            'SI2'
            );
        foreach ($options as $valeur){
            echo "<option>$valeur</option>";
        }
        ?>
    </select>
    
    
</body>
</html>