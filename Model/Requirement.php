<?php

/**
 *
 */
class Requirement {
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
        $this->name = $name;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getRequirementList($dbc) {
        $sqlQuery = 'SELECT * FROM requirements ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $requirements = $statement->fetchAll(PDO::FETCH_ASSOC);
        $requirementsJson = json_encode($requirements);
        return $requirementsJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getRequirementById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM requirements WHERE id = :id';
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
    public static function addRequirement($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO requirements SET id = :id, name = :name';
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
    public static function updateRequirement($dbc, $id, $name) {
        $sqlQuery = 'UPDATE requirements SET id = :id, name = :name';
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
    public static function deleteRequirement($dbc, $id) {
        $sqlQuery = "DELETE FROM requirements WHERE requirements.id = $id";
        $bindParam = array('id' => $id);
        $requirement = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $requirementJson = json_encode($requirement);
        return $requirementJson;
    }

}