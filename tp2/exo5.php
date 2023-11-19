<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    for ($i = 1 ; $i < 10 ; $i++ ){
        $x=8*$i;
        echo "<tr> <td> $i </td> <td> * </td> <td> 8 </td> <td> = </td><td>$x</td></tr> <br>";
    }
    ?>
    </table>
</body>
</html>