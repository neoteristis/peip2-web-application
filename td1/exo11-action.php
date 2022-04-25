<?php

# retourne une chaîne de caractères indiquant
# le résultat, où '$x' et '$y' sont les nombres
# dont il fallait deviner la valeur du produit
# et '$user' la valeur proposée par l'utilisateur
function resultat($x, $y, $user)
{
    if ($x * $y == $user) {
        return "Bravo, vous avez raison, $x x $y = $user !";
    } else {
        $result = $x * $y;
        return "Faux : $x x $y = $result et non $user";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TP 1 - Exo 11</title>
    <meta name="author" content="Marc Gaetano">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="css/tp1.css">
</head>
<body>
<h1>TP 1 - Exo 11</h1>
<hr>
<p>
    <?php
    echo resultat($_GET["x"], $_GET["y"], $_GET["user"]);
    ?>
</p>
<p>
    <a class="bouton" href="exo11-formulaire.php">Autre multiplication</a>
</p>
</body>
</html>
