<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;
/**
 *
 */
class Developper {
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;

    /**
     * @param int $id
     * @param string $name
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
        $this->title = $name;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public function getDeveloppersList() {
        $sqlQuery = 'SELECT * FROM developper ORDER BY id';
        try {
            $developpers = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };

        return $developpers;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getDevelopperById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM developper WHERE id = :id';
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
    public function addDevelopper($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO developper SET id = :id, name = :name';
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
    public function updateDevelopper($dbc, $id, $name) {
        $sqlQuery = 'UPDATE developper SET id = :id, name = :name';
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
    public function deleteDevelopper($dbc, $id) {
        $sqlQuery = "DELETE FROM developper WHERE developper.id = $id";
        $bindParam = array('id' => $id);
        $developper = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $developperJson = json_encode($developper);
        return $developperJson;
    }

}