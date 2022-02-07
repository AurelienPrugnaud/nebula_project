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
    private $mail;
    /**
     * @var
     */
    private $firstname;
    /**
     * @var
     */
    private $lastname;
    /**
     * @var
     */
    private $adress1;
    /**
     * @var
     */
    private $adress2;
    /**
     * @var
     */
    private $city;
    /**
     * @var
     */
    private $state;
    /**
     * @var
     */
    private $cityCode;
    /**
     * @var
     */
    private $password;
    /**
     * @var
     */
    private $gameId;


    /**
     * @param int $id
     * @param string $mail
     * @param string $firstname
     * @param string $lastname
     * @param string $adress1
     * @param string $adress2
     * @param string $city
     * @param string $state
     * @param int $cityCode
     * @param string $password
     * @param int $gameId
     */
    public function __construct($id = '', $mail = '', $firstname = '', $lastname = '', $adress1 = '', $adress2 = '', $city = '', $state = '', $cityCode = '', $password = '', $gameId = '') {

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
    public function getMail() {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void {
        $this->lastname = $serialNumber;
    }

    /**
     * @return mixed
     */
    public function getAdress1() {
        return $this->adress1;
    }

    /**
     * @param mixed $adress1
     */
    public function setAdress1($adress1): void {
        $this->adress1 = $adress1;
    }

    /**
     * @return mixed
     */
    public function getAdress2() {
        return $this->adress2;
    }

    /**
     * @param mixed $adress2
     */
    public function setAdress2($adress2): void {
        $this->adress2 = $adress2;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCityCode() {
        return $this->cityCode;
    }

    /**
     * @param mixed $cityCode
     */
    public function setCityCode($cityCode): void {
        $this->cityCode = $cityCode;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getGameId() {
        return $this->gameId;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId): void {
        $this->gameId = $gameId;
    }


    /**
     * @param $dbc
     * @return false|string
     */
    public static function getUsersList($dbc) {
        $sqlQuery = 'SELECT * FROM users ORDER BY id_user';
        $statement = $dbc->query($sqlQuery);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        $usersJson = json_encode($users);
        return $users;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getUserById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM users WHERE id_user = :id';
        $bindParam = array('id' => $id);
        $userById = $dbc->select($sqlQuery, $bindParam);
        $userByIdJson = json_encode($userById);
        return $userByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $mail
     * @param $firstname
     * @param $lastname
     * @param $adress1
     * @param $adress2
     * @param $city
     * @param $state
     * @param $cityCode
     * @param $password
     * @param $gameId
     * @return false|string
     */
    public static function addUser($dbc, $id, $mail, $firstname, $lastname, $adress1, $adress2, $city, $state, $cityCode, $password, $gameId) {
        $sqlQuery = 'INSERT INTO users SET id_user = :id, mail = :mail, firstname = :firstname, lastname = :lastname, adress1 = :adress1, adress2 = :adress2, city = :city, state = :state, cityCode = :cityCode, password = :password, gameId = :gameId';
        $bindParam = array('id' => $id, 'mail' => $mail, 'firstname' => $firstname, 'lastname' => $lastname, 'adress1' => $adress1, 'adress2' => $adress2, 'city' => $city, 'state' => $state, 'cityCode' => $cityCode, 'password' => $password, 'gameId' => $gameId);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $userJson = json_encode($user);
        return $userJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $mail
     * @param $firstname
     * @param $lastname
     * @param $adress1
     * @param $adress2
     * @param $city
     * @param $state
     * @param $cityCode
     * @param $password
     * @param $gameId
     * @return false|string
     */
    public static function updateUser($dbc, $id, $mail, $firstname, $lastname, $adress1, $adress2, $city, $state, $cityCode, $password, $gameId) {
        $sqlQuery = 'UPDATE users SET id_user = :id, mail = :mail, firstname = :firstname, lastname = :lastname, adress1 = :adress1, adress2 = :adress2, city = :city, state = :state, cityCode = :cityCode, password = :password, gameId = :gameId';
        $bindParam = array('id' => $id, 'mail' => $mail, 'firstname' => $firstname, 'lastname' => $lastname, 'adress1' => $adress1, 'adress2' => $adress2, 'city' => $city, 'state' => $state, 'cityCode' => $cityCode, 'password' => $password, 'gameId' => $gameId);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $userJson = json_encode($user);
        return $userJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteUser($dbc, $id) {
        $sqlQuery = "DELETE FROM users WHERE users.id_user = $id";
        $bindParam = array('id' => $id);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $userJson = json_encode($user);
        return $userJson;
    }

}