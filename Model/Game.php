<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Game {
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;   
    /**
     * @var
     */
    public $releaseDate;
    /**
     * @var
     */
    public $price;
    /**
     * @var
     */
    public $youtubeLink;
    /**
     * @var
     */
    public $hook;
    /**
     * @var
     */
    public $addDate;
    
    /**
     * @param int $id
     * @param string $name
     * @param string $releaseDate
     * @param string $price
     * @param string $youtubeLink
     * @param string $addDate
     */
    public function __construct() {
        $this->dbc = new Database();

    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getDateLaunch() {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setDateLaunch($releaseDate): void {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getHook() {
        return $this->hook;
    }

    /**
     * @param mixed $price
     */
    public function setHook($hook): void {
        $this->hook = $hook;
    }

        /**
     * @return mixed
     */
    public function getYoutubeLink() {
        return $this->youtubeLink;
    }

    /**
     * @param mixed $youtubeLink
     */
    public function setYoutubeLink($youtubeLink): void {
        $this->price = $youtubeLink;
    }

    /**
     * @return mixed
     */
    public function getDateAdd() {
        return $this->addDate;
    }

    /**
     * @param mixed $addDate
     */
    public function setDateAdd($addDate): void {
        $this->addDate = $addDate;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public function getGamesList() {
    $sqlQuery = 'SELECT
    G.id,
    G.name,
    G.releaseDate,
    G.addDate,
    G.hook,
    G.price,
    E.name as editorName,
    D.name as developperName,
    I0.name as image0,
    I5.name as image5
FROM game G
LEFT JOIN editor E on G.id_editor = E.id
LEFT JOIN developper D on G.id_developper = D.id
LEFT JOIN image I0 on I0.id_game = G.id AND I0.orderImg = 0
LEFT JOIN image I5 on I5.id_game = G.id and I5.orderImg = 5;
';
        try {
            $games = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };

        /* echo '<pre>';
            print_r($games);
        echo '<pre>';
        exit;  */

        return $games;

        
    }

     

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getGameById($dbc, $id) {
        //$sqlQuery = 'SELECT id, name FROM game WHERE id = :id';
        $sqlQuery = 'SELECT
        G.id,
        G.name,
        G.releaseDate,
        G.addDate,
        G.hook,
        G.price,
        E.name as editorName,
        D.name as developperName,
        P.name as pegiName,
    	P.img as pegiImg,
        I0.name as image0,
        I1.name as image1,
        I2.name as image2,
        I3.name as image3,
        I4.name as image4,
        I5.name as image5,
        PT0.title as title0,
        PA0.paragraph as para0,
        PT1.title as title1,
        PA1.paragraph as para1,
        PT2.title as title2,
        PA2.paragraph as para2,
        PT3.title as title3,
        PA3.paragraph as para3,
        PT4.title as title4,
        PA4.paragraph as para4,
        PT5.title as title5,
        PA5.paragraph as para5,
        PT6.title as title6,
        PA6.paragraph as para6,
        PT7.title as title7,
        PA7.paragraph as para7
    FROM game G
    LEFT JOIN editor E on G.id_editor = E.id
    LEFT JOIN developper D on G.id_developper = D.id
    LEFt JOIN pegi P on G.id_pegi = P.id
    LEFT JOIN image I0 on I0.id_game = G.id AND I0.orderImg = 0
    LEFT JOIN image I1 on I1.id_game = G.id AND I1.orderImg = 1
    LEFT JOIN image I2 on I2.id_game = G.id AND I2.orderImg = 2
    LEFT JOIN image I3 on I3.id_game = G.id AND I3.orderImg = 3
    LEFT JOIN image I4 on I4.id_game = G.id AND I4.orderImg = 4
    LEFT JOIN image I5 on I5.id_game = G.id and I5.orderImg = 5
    LEFT JOIN paragraph PT0 ON PT0.id_game = G.id AND PT0.orderParagraph = 0
    LEFT JOIN paragraph PA0 ON PA0.id_game = G.id AND PA0.orderParagraph = 0
    LEFT JOIN paragraph PT1 ON PT1.id_game = G.id AND PT1.orderParagraph = 1
    LEFT JOIN paragraph PA1 ON PA1.id_game = G.id AND PA1.orderParagraph = 1
    LEFT JOIN paragraph PT2 ON PT2.id_game = G.id AND PT2.orderParagraph = 2
    LEFT JOIN paragraph PA2 ON PA2.id_game = G.id AND PA2.orderParagraph = 2
    LEFT JOIN paragraph PT3 ON PT3.id_game = G.id AND PT3.orderParagraph = 3
    LEFT JOIN paragraph PA3 ON PA3.id_game = G.id AND PA3.orderParagraph = 3
    LEFT JOIN paragraph PT4 ON PT4.id_game = G.id AND PT4.orderParagraph = 4
    LEFT JOIN paragraph PA4 ON PA4.id_game = G.id AND PA4.orderParagraph = 4
    LEFT JOIN paragraph PT5 ON PT5.id_game = G.id AND PT5.orderParagraph = 5
    LEFT JOIN paragraph PA5 ON PA5.id_game = G.id AND PA5.orderParagraph = 5
    LEFT JOIN paragraph PT6 ON PT6.id_game = G.id AND PT6.orderParagraph = 6
    LEFT JOIN paragraph PA6 ON PA6.id_game = G.id AND PA6.orderParagraph = 6
    LEFT JOIN paragraph PT7 ON PT7.id_game = G.id AND PT7.orderParagraph = 7
    LEFT JOIN paragraph PA7 ON PA7.id_game = G.id AND PA7.orderParagraph = 7
	Where g.id = :id;';
        $bindParam = array('id' => $id);
        $gameById = $dbc->select($sqlQuery, $bindParam);
        $gameByIdJson = json_encode($gameById);
        return $gameByIdJson;
    }

    /**
     * @param int $id
     * @param string $name
     * @param string $releaseDate
     * @param string $price
     * @param string $youtubeLink
     * @param string $addDate
     */
    public function addGame($dbc, $id, $name, $releaseDate, $price, $hook, $youtubeLink ,$addDate) {
        $sqlQuery = 'INSERT INTO game SET id = :id, name = :name, releaseDate = :releaseDate, price = :price, hook = :hook, youtubeLink = :youtubeLink,addDate = :addDate,';
        $bindParam = array('id' => $id, 'name' => $name, 'releaseDate' => $releaseDate, 'price' => $price, 'hook' => $hook, 'youtubeLink' => $youtubeLink,'addDate' => $addDate);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($game);
        return $gameJson;
    }

    /**
     * @param int $id
     * @param string $name
     * @param string $releaseDate
     * @param string $price
     * @param string $youtubeLink
     * @param string $addDate
     */
    public static function updateGame($dbc, $id, $name, $releaseDate, $price, $hook, $youtubeLink, $addDate) {
        $sqlQuery = 'UPDATE game SET id = :id, name = :name, releaseDate = :releaseDate, price = :price, hook = :hook, youtubeLink = :youtubeLink, addDate = :addDate,';
        $bindParam = array('id' => $id, 'name' => $name, 'releaseDate' => $releaseDate, 'price' => $price, 'hook' => $hook, 'youtubeLink' => $youtubeLink, 'addDate' => $addDate);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($game);
        return $gameJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deleteGame($dbc, $id) {
        $sqlQuery = "DELETE FROM game WHERE game.id = $id";
        $bindParam = array('id' => $id);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($user);
        return $gameJson;
    }
}