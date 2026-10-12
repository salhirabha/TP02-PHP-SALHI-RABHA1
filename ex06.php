<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
<h1>Exercice 6 - Mois avec switch</h1>

<?php
$numeroMois = 3;

function afficherMois($numeroMois) {
    switch ($numeroMois) {
        case 1: echo "Janvier"; break;
        case 2: echo "Février"; break;
        case 3: echo "Mars"; break;
        case 4: echo "Avril"; break;
        case 5: echo "Mai"; break;
        case 6: echo "Juin"; break;
        case 7: echo "Juillet"; break;
        case 8: echo "Août"; break;
        case 9: echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "Numéro de mois invalide";
    }
}

echo "<h2>2. Test avec 3 (Vérification)</h2>";
echo "Numéro 3 => ";
afficherMois($numeroMois);
echo "<br>";

echo "<h2>4. Tests 1, 3, 12, 15</h2>";
$tests = [1, 3, 12, 15];
foreach ($tests as $t) {
    echo "Numéro $t => ";
    afficherMois($t);
    echo "<br>";
}

echo "<h2>5. Mois courant du serveur avec date('m')</h2>";
$numeroMois = (int) date("m");
echo "Aujourd'hui on est le mois numéro $numeroMois => ";
afficherMois($numeroMois);
echo "<br>";
?>
<p><a href="index.php">Accueil</a></p>

</body>
</html>