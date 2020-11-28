<html>
<body>

<?php

    $fichier = "../../fichiers/url.txt";    //Chemin vers le fichiers à ouvrir
    $lignes = file($fichier);   //file renvoie un tableau avec les lignes du fichier

    foreach ($lignes as $url){  //parcours ligne par ligne

        echo "<p><a href=$url>$url</a></p>";

    }

?>

</body>
</html>