<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Traitement POST</title></head>
<body>
<h1>Traitement POST</h1>
<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['groupe'])) {
    
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p style='color:red'>Erreur : tous les champs sont obligatoires. Veuillez remplir le formulaire complet.</p>";
    } else {
        $nom_safe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_safe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_safe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        
        echo "<p>Bienvenue $prenom_safe $nom_safe du groupe $groupe_safe !</p>";
    }
} else {
    echo "<p style='color:orange'>Aucune donnée reçue. Veuillez passer par le formulaire <a href='ex10_post.html'>ex10_post.html</a>.</p>";
}
?>
<p><a href="ex10_post.html">Retour au formulaire</a></p>
<p><a href="index.php">Accueil</a></p>
</body>
</html>