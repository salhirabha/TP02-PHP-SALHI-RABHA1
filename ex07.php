<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
<h1>Exercice 7 - Boucles for</h1>

<?php
$nombre = 7;
?>

<section style="border:1px solid black; padding:10px; margin-bottom:20px;">
    <h2>1. Table de multiplication de <?php echo $nombre; ?></h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat <br>";
    }
    ?>
</section>

<section style="border:1px solid black; padding:10px;">
    <h2>2. Pyramide de 6 lignes</h2>
    <pre>
<?php
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "* ";
    }
    echo "\n";
}
?>
    </pre>
</section>
<p><a href="index.php">Accueil</a></p>

</body>
</html>