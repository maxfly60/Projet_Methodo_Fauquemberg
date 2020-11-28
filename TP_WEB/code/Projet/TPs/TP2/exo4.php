<?php

    //inclure le fichier de config
    require "../../includes/Pdo.php";

    //pourquoi pas : copier cette ligne dans PDO.php
    //pour ne pas avoir à réécrire ici
    //idem dans les exos précédents

    $bd = new PDO(
        "mysql:host=$adresseServer;dbname=$BDD;port=$port;charset=utf8",$nomUtilisateur,$mdp
    );

    //requêtes directe : PAS de remplacements à l'intérieur
    $album = $bd -> query('select * from album
                    inner join genre on genre.id = album.genre
                    inner join artiste on artiste.id= album.artiste');

    echo "<table>";

    echo "<tr><th>Album</th><th>Artiste</th><th>Nom</th><th>Style</th></tr>";
    while($ligne = $album->fetch(PDO::FETCH_NUM)){
        echo "<tr><td> $ligne[0] </td><td> $ligne[3] </td><td> $ligne[1] </td><td> $ligne[2] </td></tr>";
    }

    echo "</table>";

?>