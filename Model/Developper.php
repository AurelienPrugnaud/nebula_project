<?php

/**
 *
 */
class Developper {
    /**
     * @var
     */
    private $id_developper;
    /**
     * @var
     */
    private $name;

    /**
     * @param int $id_developper
     * @param string $name
     */
    public function __construct($id_developper = '', $name = '') {

    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id_developper
     */
    public function setId($id_developper): void {
        $this->id = $id_developper;
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
     * @param $id_developper
     * @return false|string
     */
    public static function getDevelopperById($dbc, $id_developper) {
        $sqlQuery = 'SELECT * FROM developpers WHERE id = :id';
        $bindParam = array('id' => $id_developper);
        $developperById = $dbc->select($sqlQuery, $bindParam);
        $developperByIdJson = json_encode($developperById);
        return $developperByIdJson;
    }

    /**
     * @param $dbc
     * @param $id_developper
     * @param $name
     * @return false|string
     */
    public static function addDevelopper($dbc, $id_developper, $name) {
        $sqlQuery = 'INSERT INTO developpers SET id = :id, name = :name';
        $bindParam = array('id' => $id_developper, 'name' => $name);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

    /**
     * @param $dbc
     * @param $id_developper
     * @param $name
     * @return false|string
     */
    public static function updateDevelopper($dbc, $id_developper, $name) {
        $sqlQuery = 'UPDATE developpers SET id = :id, name = :name';
        $bindParam = array('id' => $id_developper, 'name' => $name);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

    /**
     * @param $dbc
     * @param $id_developper
     * @return false|string
     */
    public static function deleteDevelopper($dbc, $id_developper) {
        $sqlQuery = "DELETE FROM developpers WHERE developpers.id = $id_developper";
        $bindParam = array('id' => $id_developper);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

}