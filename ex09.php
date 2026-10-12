<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #eee; }
    </style>
</head>
<body>
<h1>Exercice 9 - Tableau associatif</h1>

<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

foreach ($notes as $note) {
    $somme += $note;
}

$moyenne = $somme / count($notes);


foreach ($notes as $nom => $note) {
    if ($note >= 10) {
        $nbValides++;
    }
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}
?>

<h2>1 & 2. Liste des étudiants</h2>
<table>
    <tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Statut</th>
    </tr>
    <?php foreach ($notes as $nom => $note): ?>
    <tr>
        <td><?php echo $nom; ?></td>
        <td><?php echo $note; ?></td>
        <td><?php echo ($note >= 10) ? "Validé" : "Non validé"; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>3. Somme et moyenne de la classe</h2>
<p>Somme des notes : <?php echo $somme; ?></p>
<p>Moyenne de la classe : <?php echo $moyenne; ?></p>

<h2>4. Nombre de validés</h2>
<p><?php echo $nbValides; ?> étudiants ont validé</p>

<h2>5. Meilleure note</h2>
<p><?php echo "$meilleurEtudiant possède la meilleure note, égale à $meilleureNote"; ?></p>
<p><a href="index.php">Accueil</a></p>
</body>
</html>