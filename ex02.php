<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtch=advice-width"  iniale-scale="1.0">
        <title>Exercice 2</title>
    </head>
    <body>
        <?php 
        //déclarer les variables 
         $nom ="SALHI";
         $prenom ="Rabha";
         $age = 20 ;
         $formation ="Programmation Web 2";

         $phrase = "je m 'appelle" .$nom. " " .$prenom. "j'ai " .$age. "ans et je suis de la formation" .$formation. "." ;

         $phrase ="J'apprends PHP";

         echo "<p>" .$phrase."</p>";
         //declarer les notes
         $note = 12 ;
         $Note = 16 ;
         //afficher les deux valeur 
          echo"<p> la valeur de variable note est :" .$note. "</p>";
          echo"<p> la valeur de variable Note est :" .$Note. "</p>";
         ?>
         <p><a href="index.php">Accueil</a></p>
    </body>


</html>