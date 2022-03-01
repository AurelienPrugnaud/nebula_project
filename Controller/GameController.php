<?php
    namespace Aurelien\Nebula\Controller;

    require_once '../Model/Database.php';
    require '../Environment/environment.php';

    use Aurelien\Nebula\Database;
    use Aurelien\Nebula\Game;


    try {
        if ($_SERVER["REQUEST_METHOD"] === "POST"):
            if(empty($_POST["title"])) {
                throw new \Exception("title est vide", 1);
            }
            if(empty($_POST["releaseDate"])) {
                throw new \Exception("releaseDate est vide", 1);
            }
            if(empty($_POST["price"])) {
                throw new \Exception("price est vide", 1);
            }
            if(empty($_POST["youtube"])) {
                throw new \Exception("youtube est vide", 1);
            }
            if(empty($_POST["pegi"])) {
                throw new \Exception("pegi est vide", 1);
            }
            
            if(empty($_POST["editor"])) {
                throw new \Exception("editor est vide", 1);
            }
            if(empty($_POST["dev"])) {
                throw new \Exception("dev est vide", 1);
            }

            $db = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
            $db->insertGame($_POST["title"], $_POST["releaseDate"], $_POST["price"], $_POST["youtube"], $_POST["pegi"], $_POST["editor"], $_POST["dev"]);
        else :
            echo "coucou";
        endif;
    }
    catch(\Exception $e) {
        echo $e->getMessage();
    }