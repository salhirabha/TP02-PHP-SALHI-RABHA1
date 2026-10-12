<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
<h1>Exercice 8 - Boucles et contrôle</h1>

<section style="border:1px solid black; padding:10px; margin-bottom:20px;">
<h2>1. Nombres pairs de 0 à 20 avec while (10 en gras)</h2>
<?php
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong> ";
    } else {
        echo "$i ";
    }
    $i += 2; 
}
?>
</section>

<section style="border:1px solid black; padding:10px; margin-bottom:20px;">
<h2>2. Comparaison while vs do-while (compteur = 5, condition < 5)</h2>
<?php
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}
echo "Boucle while : $executionsWhile exécution(s)<br>";

$compteur = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
echo "Boucle do-while : $executionsDoWhile exécution(s)<br>";
?>
<p><em>Vérification : while 0 et do-while 1 comme demandé.</em></p>
</section>

<section style="border:1px solid black; padding:10px;">
<h2>3. Continue (multiples de 3) et break (arrêt à 16)</h2>
<?php
for ($n = 1; $n <= 20; $n++) {
    if ($n >= 16) {
        break; 
    }
    if ($n % 3 == 0) {
        continue; 
    }
    echo "$n ";
}
?>
<p><em>Vérification : ni multiples de 3, ni >=16 ne sont affichés.</em></p>
</section>
<p><a href="index.php">Accueil</a></p>

</body>
</html>