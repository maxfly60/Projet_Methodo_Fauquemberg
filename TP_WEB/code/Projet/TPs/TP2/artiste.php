<?php
    //récupère les variables d'init PDO
    require "../../includes/Pdo.php";

    //fichier album
    $fichier = file ("../../fichiers/artiste.txt");

    $db = new PDO(
        // sur une seule ligne ligne, sans espaces
        "mysql:host=$adresseServer;dbname=$BDD;port=$port;charset=utf8",$nomUtilisateur,$mdp
    );
    //préciser qu'en cas d'erreur, lancer une exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //préparer la requête et récupérer un objet PDOStatement
    $reqArtiste = $db->prepare("insert into artiste values(:id,:nom)");
    //%db->prepare("insert into album values(?,?,?,?,?)");

    foreach($fichier as $ligne){
        //séparer les segments de la ligne avec ';' ;=comma Comma Separated
        list($id,$nom)=explode(';',$ligne);
        $reqArtiste->execute(array(
        ":id"=>$id,
        ":nom"=>$nom,
        ));
    }
    echo "import effectué";


?>