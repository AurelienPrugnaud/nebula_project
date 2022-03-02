<?php
    namespace Aurelien\Nebula\Controller;

    require_once '../Model/Database.php';
    require '../Environment/environment.php';

    use Aurelien\Nebula\Database;
    use Aurelien\Nebula\Game;
    use Aurelien\Nebula\Image;


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
            if(empty($_POST["image"])) {
                throw new \Exception("Le premier champ image est vide", 1);
            }
            if(empty($_POST["image"])) {
                throw new \Exception("Le deuxième champ image est vide", 1);
            }
            if(empty($_POST["image"])) {
                throw new \Exception("Le troisième champ image est vide", 1);
            }
            if(empty($_POST["image"])) {
                throw new \Exception("Le quatrième champ image est vide", 1);
            }
            if(empty($_POST["image"])) {
                throw new \Exception("Le cinquième champ image est vide", 1);
            }
            if(empty($_POST["image"])) {
                throw new \Exception("Le sizième champ image est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le premier champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le premier champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le deuxième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le deuxième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le troisième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le champ troisième du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le quatrième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le quatrième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le cinquième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le cinquième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le sizième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le sizième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le septième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le septième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle"])) {
                throw new \Exception("Le huitième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph"])) {
                throw new \Exception("Le huitième champ du paragraphe est vide", 1);
            }


            /* $uploaddir = '../assets/img';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            echo '<pre>';
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "Le fichier est valide, et a été téléchargé
                    avec succès. Voici plus d'informations :\n";
            } else {
                echo "Attaque potentielle par téléchargement de fichiers.
                    Voici plus d'informations :\n";
            }

            echo 'Voici quelques informations de débogage :';
            print_r($_FILES);

            echo '</pre>'; */

            $db = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
            $db->insertGame($_POST["title"], $_POST["releaseDate"], $_POST["price"], $_POST["youtube"], $addDate, $_POST["pegi"], $_POST["editor"], $_POST["dev"], $_POST["image"], $_POST["image"], $_POST["image"], $_POST["image"], $_POST["image"], $_POST["image"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"], $_POST["paragraphTitle"], $_POST["paragraph"]);
            
        else :
            echo "coucou";
        endif;
    }
    catch(\Exception $e) {
        echo $e->getMessage();
    }
