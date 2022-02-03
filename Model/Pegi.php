<?php

/**
 *
 */
class Pegi {
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
    private $img;

    /**
     * @param int $id
     * @param string $name
     * @param string $img
     */
    public function __construct($id = '', $name = '', $img = '') {

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
    public function getImg() {
        return $this->img;
    }

    /**
     * @param mixed $name
     */
    public function setImg($img): void {
        $this->img = $img;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getPegiList($dbc) {
        $sqlQuery = 'SELECT * FROM pegis ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $pegis = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pegisJson = json_encode($pegis);
        return $pegisJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getPegiById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM pegis WHERE id = :id';
        $bindParam = array('id' => $id);
        $pegiById = $dbc->select($sqlQuery, $bindParam);
        $pegiByIdJson = json_encode($pegiById);
        return $pegiByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @param $img
     * @return false|string
     */
    public static function addPegi($dbc, $id, $name, $img) {
        $sqlQuery = 'INSERT INTO pegis SET id = :id, name = :name, img = :img';
        $bindParam = array('id' => $id, 'name' => $name, 'img' => $img);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pegiJson = json_encode($pegi);
        return $pegiJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @param $img
     * @return false|string
     */
    public static function updatePegi($dbc, $id, $name, $img) {
        $sqlQuery = 'UPDATE pegis SET id = :id, name = :name, img = :img';
        $bindParam = array('id' => $id, 'name' => $name, 'img' => $img);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pegiJson = json_encode($pegi);
        return $pegiJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deletePegi($dbc, $id) {
        $sqlQuery = "DELETE FROM pegis WHERE pegis.id = $id";
        $bindParam = array('id' => $id);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pegiJson = json_encode($pegi);
        return $pegiJson;
    }

}