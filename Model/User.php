<?php
namespace Aurelien\Nebula;
use Aurelien\Nebula\Controller\UserController;
use Aurelien\Nebula\Database;

/**
 *
 */
class User {
    /**
     * @var
     */
    private $email;
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
     * @param string $email
     * @param string $firstname
     * @param string $lastname
     * @param string $adress1
     * @param string $adress2
     * @param string $city
     * @param string $state
     * @param int $cityCode
     * @param string $password
     */
    public function __construct() {
        $this->dbc = new Database;
    }

    /**
     * @return mixed
     */
    public function getMail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setMail($email): void {
        $this->email = $email;
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
        $this->lastname = $lastname;
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
     * @param $dbc
     * @return false|string
     */
    public static function getUsersList() {
        $sqlQuery = 'SELECT * FROM user ORDER BY lastname';
        $statement = $dbc->query($sqlQuery);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    /**
     * @param $dbc
     * @param $lastname
     * @return false|string
     */
    public static function getUserByLastname($dbc, $lastname) {
        $sqlQuery = 'SELECT * FROM user WHERE lastname = :lastname';
        $bindParam = array('lastname' => $lastname);
        $userByLastname = $dbc->select($sqlQuery, $bindParam);
        return $userByLastname;
    }

    /**
     * @param $dbc
     * @param $lastname
     * @param $email
     * @param $firstname
     * @param $lastname
     * @param $adress1
     * @param $adress2
     * @param $city
     * @param $state
     * @param $cityCode
     * @param $password
     * @return false|string
     */
    public static function addUser($dbc, $email, $firstname, $lastname, $adress1, $adress2, $city, $state, $cityCode, $password) {
        $sqlQuery = 'INSERT INTO user SET email = :email, firstname = :firstname, lastname = :lastname, adress1 = :adress1, adress2 = :adress2, city = :city, state = :state, cityCode = :cityCode, password = :password';
        $bindParam = array('email' => $email, 'firstname' => $firstname, 'lastname' => $lastname, 'adress1' => $adress1, 'adress2' => $adress2, 'city' => $city, 'state' => $state, 'cityCode' => $cityCode, 'password' => $password);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $user;
    }

    /**
     * @param $dbc
     * @param $lastname
     * @param $email
     * @param $firstname
     * @param $lastname
     * @param $adress1
     * @param $adress2
     * @param $city
     * @param $state
     * @param $cityCode
     * @param $password
     * @return false|string
     */
    public static function updateUser($dbc, $email, $firstname, $lastname, $adress1, $adress2, $city, $state, $cityCode, $password) {
        $sqlQuery = 'UPDATE user SET email = :email, firstname = :firstname, lastname = :lastname, adress1 = :adress1, adress2 = :adress2, city = :city, state = :state, cityCode = :cityCode, password = :password';
        $bindParam = array('email' => $email, 'firstname' => $firstname, 'lastname' => $lastname, 'adress1' => $adress1, 'adress2' => $adress2, 'city' => $city, 'state' => $state, 'cityCode' => $cityCode, 'password' => $password);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $user;
    }

    /**
     * @param $dbc
     * @param $email
     * @return false|string
     */
    public static function deleteUser($dbc, $email) {
        $sqlQuery = "DELETE FROM user WHERE user.email = $email";
        $bindParam = array('email' => $email);
        $user = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $user;
    }

}