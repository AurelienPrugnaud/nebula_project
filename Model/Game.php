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
        $sqlQuery = 'SELECT * FROM game INNER JOIN image on game.id = image.id_game;';
        try {
            $games = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $games;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getGameById($dbc, $id) {
        $sqlQuery = 'SELECT id, name FROM game WHERE id = :id';
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