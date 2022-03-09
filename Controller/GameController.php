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
            if(empty($_POST["hook"])) {
                throw new \Exception("Le champs de l'accroche est vide", 1);
            }
            if(empty($_POST["price"])) {
                throw new \Exception("Le champ du prix est vide", 1);
            }
            if(empty($_POST["category0"])) {
                throw new \Exception("Le premier champs des catégories est vide", 1);
            }
            if(empty($_POST["category1"])) {
                throw new \Exception("Le deuxième champs des catégories est vide", 1);
            }
            if(empty($_POST["category2"])) {
                throw new \Exception("Le troisième champs des catégories est vide", 1);
            }
            if(empty($_POST["category3"])) {
                throw new \Exception("Le quatrième champs des catégories est vide", 1);
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
            if(empty($_POST["platform"])) {
                throw new \Exception("Le champ de la plateforme est vide", 1);
            }
            if(empty($_FILES["image0"])) {
                throw new \Exception("Le premier champ image est vide", 1);
            }
            if(empty($_FILES["image1"])) {
                throw new \Exception("Le deuxième champ image est vide", 1);
            }
            if(empty($_FILES["image2"])) {
                throw new \Exception("Le troisième champ image est vide", 1);
            }
            if(empty($_FILES["image3"])) {
                throw new \Exception("Le quatrième champ image est vide", 1);
            }
            if(empty($_FILES["image4"])) {
                throw new \Exception("Le cinquième champ image est vide", 1);
            }
            if(empty($_FILES["image5"])) {
                throw new \Exception("Le sizième champ image est vide", 1);
            }
            /* if(empty($_POST["paragraphTitle0"])) {
                throw new \Exception("Le premier champ titre du paragraphe est vide", 1);
            } 
            if(empty($_POST["paragraph0"])) {
                throw new \Exception("Le premier champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle1"])) {
                throw new \Exception("Le deuxième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph1"])) {
                throw new \Exception("Le deuxième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle2"])) {
                throw new \Exception("Le troisième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph2"])) {
                throw new \Exception("Le champ troisième du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle3"])) {
                throw new \Exception("Le quatrième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph3"])) {
                throw new \Exception("Le quatrième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle4"])) {
                throw new \Exception("Le cinquième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph4"])) {
                throw new \Exception("Le cinquième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle5"])) {
                throw new \Exception("Le sizième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph5"])) {
                throw new \Exception("Le sizième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle6"])) {
                throw new \Exception("Le septième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph6"])) {
                throw new \Exception("Le septième champ du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraphTitle7"])) {
                throw new \Exception("Le huitième champ titre du paragraphe est vide", 1);
            }
            if(empty($_POST["paragraph7"])) {
                throw new \Exception("Le huitième champ du paragraphe est vide", 1);
            } */

            if(empty($_POST["requireMin0"])) {
                throw new \Exception("Le champ du système d'exploitation minimum est vide", 1);
            }
            if(empty($_POST["requireMin1"])) {
                throw new \Exception("Le champ du processeur Intel minimum est vide");
            }
            if(empty($_POST["requireMin2"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireMin3"])) {
                throw new \Exception("Le champ de la mémoire vive minimum est vide");
            }
            if(empty($_POST["requireMin4"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireMin5"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireMin6"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireMin7"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireRec0"])) {
                throw new \Exception("Le champ du système d'exploitation minimum est vide", 1);
            }
            if(empty($_POST["requireRec1"])) {
                throw new \Exception("Le champ du processeur Intel minimum est vide");
            }
            if(empty($_POST["requireRec2"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireRec3"])) {
                throw new \Exception("Le champ de la mémoire vive minimum est vide");
            }
            if(empty($_POST["requireRec4"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireRec5"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireRec6"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }
            if(empty($_POST["requireRec7"])) {
                throw new \Exception("Le champ du processeur AMD minimum est vide");
            }

            /* $gameDirectory = preg_replace('/\s+/', '_' ,strtolower($_POST["title"]));

            if (!is_dir('../assets/public/img/games/'.$gameDirectory)) {
                mkdir('../assets/public/img/games/'.$gameDirectory, 0777, true);
            } else {
                throw new \Exception("Le dossier du jeu est déjà créer.");
                
            }

            $uploaddir = '../assets/public/img/games/'.$gameDirectory.'/';
            foreach($_FILES as $images) {
                move_uploaded_file($images["tmp_name"], $uploaddir.$images["name"]);
            } */

            $uploaddir = '../assets/public/img/games/';
            foreach($_FILES as $images) {
                move_uploaded_file($images["tmp_name"], $uploaddir.$images["name"]);
            }

            $db = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
            $db->insertGame(
                $_POST["title"], 
                $_POST["releaseDate"], 
                $_POST["price"], 
                $_POST["hook"], 
                $_POST["youtube"], 
                $addDate, 
                $_POST["pegi"], 
                $_POST["editor"], 
                $_POST["dev"],
                $_POST["platform"], 
                $_POST["category0"], 
                $_POST["category1"], 
                $_POST["category2"], 
                $_POST["category3"], 
                $_FILES["image0"], 
                $_FILES["image1"], 
                $_FILES["image2"], 
                $_FILES["image3"], 
                $_FILES["image4"], 
                $_FILES["image5"], 
                $_POST["paragraphTitle0"], 
                $_POST["paragraph0"], 
                $_POST["paragraphTitle1"], 
                $_POST["paragraph1"], 
                $_POST["paragraphTitle2"], 
                $_POST["paragraph2"], 
                $_POST["paragraphTitle3"], 
                $_POST["paragraph3"], 
                $_POST["paragraphTitle4"], 
                $_POST["paragraph4"], 
                $_POST["paragraphTitle5"], 
                $_POST["paragraph5"], 
                $_POST["paragraphTitle6"], 
                $_POST["paragraph6"], 
                $_POST["paragraphTitle7"], 
                $_POST["paragraph7"],

                $_POST["typeIdMin0"],
                $_POST["requireMin0"],
                $_POST["typeIdMin1"],
                $_POST["requireMin1"],
                $_POST["typeIdMin2"],
                $_POST["requireMin2"],
                $_POST["typeIdMin3"],
                $_POST["requireMin3"],
                $_POST["typeIdMin4"],
                $_POST["requireMin4"],
                $_POST["typeIdMin5"],
                $_POST["requireMin5"],
                $_POST["typeIdMin6"],
                $_POST["requireMin6"],
                $_POST["typeIdMin7"],
                $_POST["requireMin7"],
                
                $_POST["typeIdRec0"],
                $_POST["requireRec0"],
                $_POST["typeIdRec1"],
                $_POST["requireRec1"],
                $_POST["typeIdRec2"],
                $_POST["requireRec2"],
                $_POST["typeIdRec3"],
                $_POST["requireRec3"],
                $_POST["typeIdRec4"],
                $_POST["requireRec4"],
                $_POST["typeIdRec5"],
                $_POST["requireRec5"],
                $_POST["typeIdRec6"],
                $_POST["requireRec6"],
                $_POST["typeIdRec7"],
                $_POST["requireRec7"],


            );
            
        else :
            echo "coucou";
        endif;
    }
    catch(\Exception $e) {
        echo $e->getMessage();
    }
