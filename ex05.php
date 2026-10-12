<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
<h1>Exercice 5 - Mention selon moyenne</h1>

<?php
$moyenne = 14;

if ($moyenne < 0 || $moyenne > 20) {
    echo "<p style='color:red'>Note invalide : $moyenne (doit être entre 0 et 20)</p>";
} elseif ($moyenne < 10) {
    echo "Moyenne : $moyenne - Message : Non validé";
} elseif ($moyenne < 12) {
    echo "Moyenne : $moyenne - Message : Passable";
} elseif ($moyenne < 14) {
    echo "Moyenne : $moyenne - Message : Assez bien";
} elseif ($moyenne < 16) {
    echo "Moyenne : $moyenne - Message : Bien";
} else {
    echo "Moyenne : $moyenne - Message : Très bien";
}

echo "<hr><h2>Tests demandés pour le README</h2>";
$tests = [-1, 9, 10, 12, 14, 16, 21];
foreach ($tests as $note) {
    echo "Test $note : ";
    if ($note < 0 || $note > 20) {
        echo "Note invalide";
    } elseif ($note < 10) {
        echo "Non validé";
    } elseif ($note < 12) {
        echo "Passable";
    } elseif ($note < 14) {
        echo "Assez bien";
    } elseif ($note < 16) {
        echo "Bien";
    } else {
        echo "Très bien";
    }
    echo "<br>";
}
?>
<p><a href="index.php">Accueil</a></p>

</body>
</html>