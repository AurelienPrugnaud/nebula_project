<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Requirement {
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
        $this->dbc = new Database;
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
     * @param 
     * @return false|string
     */
    public function getRequirementsList() {
        $sqlQuery = 'SELECT * FROM requirement ORDER BY id';
        try {
            $requirements = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $requirements;
    }

    public function getRequirementsGameList() {
        $sqlQuery = 'SELECT T.name as typeName, R.name as requirementName, TRG.minimum, TRG.recomandation FROM type_requirement_game TRG INNER JOIN type T on T.id = TRG.id_type INNER JOIN requirement R on R.id = TRG.id_requirement WHERE TRG.id_game = 1; ';
        try {
            $requirements = $this ->dbc->selectAll($sqlQuery);
        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        return $requirements;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getRequirementById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM requirement WHERE id = :id';
        $bindParam = array('id' => $id);
        $requirementById = $dbc->select($sqlQuery, $bindParam);
        return $requirementById;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addRequirement($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO requirement SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $requirement = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $requirement;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateRequirement($dbc, $id, $name) {
        $sqlQuery = 'UPDATE requirement SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $requirement = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $requirement;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deleteRequirement($dbc, $id) {
        $sqlQuery = "DELETE FROM requirement WHERE requirement.id = $id";
        $bindParam = array('id' => $id);
        $requirement = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $requirement;
    }

}