<?php

/**
 *
 */
class User {
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;   
    /**
     * @var
     */
    private $releaseDate;
    /**
     * @var
     */
    private $price;
    /**
     * @var
     */
    private $youtubeLink;
    /**
     * @var
     */
    private $addDate;
    
    /**
     * @param int $id
     * @param string $name
     * @param string $releaseDate
     * @param string $price
     * @param string $youtubeLink
     * @param string $addDate
     */
    public function __construct($id = '', $name = '', $releaseDate = '', $price ='', $youtubeLink= '', $addDate = '') {

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
    public static function getGamesList($dbc) {
        $sqlQuery = 'SELECT id, name FROM game ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $games = $statement->fetchAll(PDO::FETCH_ASSOC);
        $gamesJson = json_encode($games);
        return $users;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getUserById($dbc, $id) {
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
    public static function addGame($dbc, $id, $name, $releaseDate, $price, $youtubeLink ,$addDate) {
        $sqlQuery = 'INSERT INTO game SET id = :id, name = :name, releaseDate = :releaseDate, price = :price, youtubeLink = :youtubeLink,addDate = :addDate,';
        $bindParam = array('id' => $id, 'name' => $name, 'releaseDate' => $releaseDate, 'price' => $price, 'youtubeLink' => $youtubeLink,'addDate' => $addDate);
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
    public static function updateGame($dbc, $id, $name, $releaseDate, $price, $youtubeLink, $addDate) {
        $sqlQuery = 'UPDATE game SET id = :id, name = :name, releaseDate = :releaseDate, price = :price, youtubeLink = :youtubeLink, addDate = :addDate,';
        $bindParam = array('id' => $id, 'name' => $name, 'releaseDate' => $releaseDate, 'price' => $price, 'youtubeLink' => $youtubeLink, 'addDate' => $addDate);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($game);
        return $gameJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteGame($dbc, $id) {
        $sqlQuery = "DELETE FROM game WHERE game.id = $id";
        $bindParam = array('id' => $id);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($user);
        return $gameJson;
    }
}