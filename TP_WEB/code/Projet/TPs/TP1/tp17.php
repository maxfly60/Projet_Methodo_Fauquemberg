<html>
<body>

<?php

    $fichier = "../../fichiers/url.txt";    //Chemin vers le fichiers à ouvrir
    $lignes = file($fichier);   //file renvoie un tableau avec les lignes du fichier

    foreach ($lignes as $chaine){  //parcours ligne par ligne

        $tab = explode(' ', $chaine, 2);  // decoupe la chaine avec ' ', limite à 2 résultats
        $url = $tab[0];
        $desc = $tab[1];
        echo "<p><a href='$url'>$desc</a></p>";

        //autre façon
        //echo "<p><a href='$tab[0]'>$tab[1]</a></p>";
        //encore autre façon
        //list($url, $desc) = explode($chaine,' ',2);
        //echo "<p><a href='$url'>$desc</a></p>";

    }

?>

</body>
</html>