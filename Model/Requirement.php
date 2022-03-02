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

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getRequirementById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM requirement WHERE id = :id';
        $bindParam = array('id' => $id);
        $requirementById = $dbc->select($sqlQuery, $bindParam);
        $requirementByIdJson = json_encode($requirementById);
        return $requirementByIdJson;
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
        $requirementJson = json_encode($requirement);
        return $requirementJson;
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
        $requirementJson = json_encode($requirement);
        return $requirementJson;
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
        $requirementJson = json_encode($requirement);
        return $requirementJson;
    }

}