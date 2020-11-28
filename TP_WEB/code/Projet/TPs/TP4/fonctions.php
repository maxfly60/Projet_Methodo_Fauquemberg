<?php

Flight::route("GET /register", function(){
    Flight::render("templates/register.tpl", array("titre"=>"Inscription"));
});

Flight::route("POST /register", function(){
//plein de traitement, notamment vérifier les données


    //$_POST['nom']
    //$_POST['email']
    //$_POST['motdepasse']


    $message=array();
    
    //test pour le nom
    if(empty($_POST['nom'])){
        $message['nom']="La saisie d'un nom est obligatoire";
    }

    //test pour l'email
    if(empty($_POST['email'])){
        $message['email'] = "La saisie d'une adresse email est obligatoire";
    }else if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==FALSE){   
        $message['email']="Le format de l'adresse email est incorect";
    }else{
        $bd = Flight::get('bd');
        $st = $bd->prepare("select email from Utilisateur where email = ?");
        $st->execute(array($_POST['email']));
        if($st->rowCount()!=0){
            $message['email']="Adresse email déjà utilisé";
        }
    }

    //test pour le mdp
    if(empty($_POST['motdepasse'])){
        $message['motdepasse'] = "La saisie d'un mot de passe est obligatoire";
    }else if(strlen($_POST['motdepasse']) < 8){ //test longueur du mdp
        $message['motdepasse'] = "Adresse email invalide";
    }

    if(!empty($message)){
        Flight::view()->assign("message",$message);
        Flight::view()->assign($_POST);
        Flight::view()->display("register.tpl");
        //Flight::render("templates/register.tpl",$_POST);
    }else{
        $bd = Flight::get('bd');



        Flight::redirect("/success");      
    }

});

Flight::route("", function(){

});

Flight::route("", function(){

});

Flight::route("", function(){

});

Flight::route("", function(){

});

?>
