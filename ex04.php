<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtch=advice-width"  iniale-scale="1.0">
        <title>Exercice 4</title>
    </head>
    <body>
        <?php
        //declarer les valeurs 
        $a = 42;
        $b = "42";
        $c = 15.8 ;
        $d = true ;
        $e = false ;
        $f = null ;

        echo "<pre>";
        var_dump($a, $b, $c, $d, $e, $f);
        echo "</pre>";

        echo "<h2>3. Conversions spécifiques et affichage</h2>";
        echo"<pre>";
         $strToInt   = (int) $b;
         $floatToInt = (int) $c;    
         $intToStr   = (string) $a;

         var_dump($strToInt);
         var_dump($floatToInt);
         var_dump($intToStr);
         echo "</pre>";

         echo"<h3> affichage true / falsa </h3>";
            echo "Avec echo : <br>";
            echo "true donne : ";
            echo $d;
            echo "<br>false donne : ";
            echo $e;
            echo " (vide, on ne voit rien)<br><br>";

             echo "Avec var_dump : <br>";
             echo "<pre>";
             var_dump($d, $e);
             echo "</pre>"; 

             echo "<h2> Conversion en booléens</h2>";
             echo "<pre>";
             $val1 = 0;
             $val2 = "0";
             $val3 = "PHP";
             $val4 = [];

             var_dump((bool) $val1);
             var_dump((bool) $val2);
             var_dump((bool) $val3);
             var_dump((bool) $val4);
             echo "</pre>";
?>
<p><a href="index.php">Accueil</a></p>
    </body>
</html>