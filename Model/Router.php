<?php
    namespace Aurelien\Nebula;

    require 'environment/environment.php';
    require 'models/Database.php';

    class Router
    {
        public function __construct() {

        }

        public function getRoute($variable) {
            
            $dbc = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);

            
            //Charger la classe de la bdd, requete sur cette classe sur la table de page, boucle sur le résultat de la requete, selon la requete serveur chargement du controller qui va charger le template

        }
    }   