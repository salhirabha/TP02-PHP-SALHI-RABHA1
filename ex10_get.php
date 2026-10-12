<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Traitement GET</title></head>
<body>
<h1>Traitement GET</h1>
<?php
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['groupe'])) {
    
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p style='color:red'>Erreur : tous les champs sont obligatoires. Veuillez remplir le formulaire complet.</p>";
    } else {
        $nom_safe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_safe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_safe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        
        echo "<p>Bienvenue $prenom_safe $nom_safe du groupe $groupe_safe !</p>";
    }
} else {
    echo "<p style='color:orange'>Aucune donnée reçue. Veuillez passer par le formulaire <a href='ex10_get.html'>ex10_get.html</a>.</p>";
}
?>
<a href="ex10_get.html">Retour</a>
 <p><a href="index.php">Accueil</a></p>
</body>
</html>