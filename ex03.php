<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtch=advice-width"  iniale-scale="1.0">
        <title>Exercice 3</title>
    </head>
    <body>
        <?php
        //definie les constante 
        const TAUX_TVA = 20 ;
        const DEVISE = "MAD" ;
        //declarer prix
        $PrixUnitaireHT = 60;
        $quantite = 3;

        //calculer le total HT
        $totalHT =  $PrixUnitaireHT * $quantite ;
        $montantTVA = $totalHT * (TAUX_TVA / 100);
        $totalTTC = $totalHT + $montantTVA;
         
        //ajouter 
        $montantFinal = $totalTTC;
        $montantFinal += 15;

        echo "<p> Total Ht : $totalHT" .DEVISE. "</p>" ;
        echo "<p> Montant TVA : $montantTVA" .DEVISE. "</p>" ;
        echo "<p> Total TTC : $totalTTC" .DEVISE. "</p>" ;
        echo "<p> Montant final : $montantFinal" .DEVISE. "</p>" ;

        if (defined("TAUX_TVA")){
            echo"<p> la constante est definie.</p>";
        }
     ?>
       <p><a href="index.php"></a>Acceuil</p> 
    </body>
</html>