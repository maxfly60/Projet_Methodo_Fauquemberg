<?php

/*Flight::route('/liste', function(){
    echo 'Je suis une liste';
});*/

/*Flight::route('/liste', function(){
    $data = array("titre" => "liste des albums", "route" => "/liste");
    Flight::render('templates/liste.tpl', $data);
});*/

Flight::route('/liste', function(){
    $bd = Flight::get('bd');
    $album = $bd->query("select * from album inner join artiste on artiste.id = album.artiste");
    $liste = $album->fetchAll();
    Flight::render('templates/liste.tpl', array("liste" => $liste, "titre" => "liste d'albums"));
});


/*Flight::route('/recherche/@name', function($name){
    echo "Salut $name";
});*/

/*Flight::route('/recherche/@name',function($name){
    $data = array("titre" => "recherche", "route" => "/recherche/$name");
    Flight::render('templates/recherche.tpl', $data);
});*/

Flight::route('/recherche/@name',function($name){
    $bd = Flight::get('bd');
    $album = $bd->prepare("select * from album inner join artiste on artiste.id = album.artiste WHERE artiste.nom LIKE ?");
    $album->execute(array($name));
    $liste = $album->fetchAll();
    Flight::render('recherche.tpl', array("liste" => $liste, "titre" => "liste_d'albums"));
});

/*Flight::route('/artiste/@id/@name', function($name, $id){
    echo "Salut artiste $id $name";
});*/

/*Flight::route('/artiste/@id/@name',function($id, $name){
    $data = array("titre" => "recherche d'artiste", "route" => "/recherche/$id/$name");
    Flight::render('templates/artiste.tpl', $data);
});*/

Flight::route('/artiste/@id/@name',function($id, $name){
    $bd = Flight::get('bd');
    $album = $bd->prepare("select * from album inner join artiste on artiste.id = album.artiste WHERE artiste.nom LIKE ?");
    $album->execute(array($name));
    $liste = $album->fetchAll();
    Flight::render('artiste.tpl', array("liste" => $liste, "titre" => "liste_d'albums"));
});

?>