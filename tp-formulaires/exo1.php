<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="exo1.php" method="post">
        <label for="">Nom :</label>
        <input type="text" name="nom">
        <label for="">Prenom :</label>
        <input type="text" name="prenom">
        <select name="civilite" >
            <option value="Mme">Mme</option>
            <option value="Melle">Melle</option>
            <option value="Mr">Mr</option>
        </select>
        <select name="ville" >
            <option value="alger">alger</option>
            <option value="boumerdas">boumerdas</option>
            <option value="oran">oran</option>
        </select>
        <button type="submit">envoyer</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $nom=$_POST['nom'];
       $prenom=$_POST['prenom'];
       $c=$_POST['civilite'];
       $ville=$_POST['ville'];
    }
    echo 'votre nom est : ' . $nom .' et votre prenom est : ' . $prenom .' votre civilité : '. $c .' vous habitez a : '. $ville;
?>