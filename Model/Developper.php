<?php

/**
 *
 */
class Developper {
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct($id = '', $name = '') {

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
        $this->title = $name;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getDeveloppersList($dbc) {
        $sqlQuery = 'SELECT * FROM developpers ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $developpers = $statement->fetchAll(PDO::FETCH_ASSOC);
        $developpersJson = json_encode($developpers);
        return $developpersJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getDevelopperById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM developpers WHERE id = :id';
        $bindParam = array('id' => $id);
        $developperById = $dbc->select($sqlQuery, $bindParam);
        $developperByIdJson = json_encode($developperById);
        return $developperByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function addDevelopper($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO developpers SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function updateDevelopper($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO developpers SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteDevelopper($dbc, $id) {
        $sqlQuery = "DELETE FROM developpers WHERE developpers.id = $id";
        $bindParam = array('id' => $id);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

}