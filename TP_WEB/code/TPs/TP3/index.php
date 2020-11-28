<?php

require "../../includes/flight/flight/Flight.php";
require "../../includes/smarty/libs/Smarty.class.php"; 
require "../../includes/Pdo.php";

$bd = new PDO(
    "mysql:host=$adresseServer;dbname=$BDD;port=$port;charset=utf8",$nomUtilisateur,$mdp
);

Flight::set('bd', $bd);

Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
   });
    Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
   }); 

Flight::route('/', function(){
    echo 'HOME';
});

include("fonctions.php");
Flight::start();

?>