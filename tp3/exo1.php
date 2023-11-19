<!DOCTYPE html>
<html>
<head>
    <title>Menu déroulant en PHP</title>
</head>
<body>

    <?php
    $valeurs = array("Mr", "Mme", "Melle");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valeurSelectionnee = $_POST["menuDeroulant"];
        echo "Option sélectionnée : " . $valeurSelectionnee;
    }
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="menuDeroulant">Sélectionnez une option :</label>
    <select name="menuDeroulant" id="menuDeroulant">
        <?php
        foreach ($valeurs as $valeur) {
            if ( $valeur=="Mme"){
                echo "<option value=' " . $valeur . " ' ". "selected >" . $valeur . "</option>";
            }else {
            echo "<option value='" . $valeur . "'>" . $valeur . "</option>";
            }
        }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Soumettre">
</form>

</body>
</html>
