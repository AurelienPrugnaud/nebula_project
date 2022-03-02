<?php
    namespace Aurelien\Nebula\Controller;

    require_once '../Model/Database.php';
    require '../Environment/environment.php';

    use Aurelien\Nebula\Database;
    use Aurelien\Nebula\Game;


    try {
        if ($_SERVER["REQUEST_METHOD"] === "POST"):
            if(empty($_POST["title"])) {
                throw new \Exception("Le champ du titre est vide", 1);
            }
            if(empty($_POST["releaseDate"])) {
                throw new \Exception("Le champ de la date de sortie est vide", 1);
            }
            if(empty($_POST["price"])) {
                throw new \Exception("Le champ du prix est vide", 1);
            }
            if(empty($_POST["youtube"])) {
                throw new \Exception("Le champ du lien Youtube est vide", 1);
            }
            $addDate = date("Y-m-d");
            if(empty($_POST["pegi"])) {
                throw new \Exception("Le champ du pegi est vide", 1);
            }
            if(empty($_POST["editor"])) {
                throw new \Exception("Le champ de l'éditeur est vide", 1);
            }
            if(empty($_POST["dev"])) {
                throw new \Exception("Le champ du développeur est vide", 1);
            }

            $db = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
            $db->insertGame($_POST["title"], $_POST["releaseDate"], $_POST["price"], $_POST["youtube"], $addDate, $_POST["pegi"], $_POST["editor"], $_POST["dev"]);
        else :
            echo "coucou";
        endif;
    }
    catch(\Exception $e) {
        echo $e->getMessage();
    }