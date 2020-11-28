<?php
    //récupère les variables d'init PDO
    require "../../includes/Pdo.php";

    //fichier album
    $fichier = file ("../../fichiers/album.txt");

    $db = new PDO(
            // sur une seule ligne ligne, sans espaces
            "mysql:host=$adresseServer;dbname=$BDD;port=$port;charset=utf8",$nomUtilisateur,$mdp
    );
    //préciser qu'en cas d'erreur, lancer une exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //préparer la requête et récupérer un objet PDOStatement
    $reqAlbum = $db->prepare("insert into album values(:id,:nom,:genre,:artiste,:date)");
    //%db->prepare("insert into album values(?,?,?,?,?)");

    foreach($fichier as $ligne){
        //séparer les segments de la ligne avec ';' ;=comma Comma Separated
        list($id,$nom,$genre,$artiste,$date)=explode(';',$ligne);
        $reqAlbum->execute(array(
        ":id"=>$id,
        ":nom"=>$nom,
        ":genre"=>$genre,
        ":artiste"=>$artiste,
        ":date"=>$date,
        ));
    }
    echo "import effectué";


?>