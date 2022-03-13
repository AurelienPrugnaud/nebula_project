<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Type {
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
     * @param $this->dbc
     * @return false|string
     */
    public function getTypesList() {
        $sqlQuery = 'SELECT * FROM type ORDER BY id';
        try {
            $types = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $types;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function getTypeById($id) {
        $sqlQuery = 'SELECT * FROM type WHERE id = :id';
        $bindParam = array('id' => $id);
        $typeById = $this->dbc->select($sqlQuery, $bindParam);
        return $typeById;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addType($id, $name) {
        $sqlQuery = 'INSERT INTO type SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $type = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $type;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateType($id, $name) {
        $sqlQuery = 'UPDATE type SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $type = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $type;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function deleteType($id) {
        $sqlQuery = "DELETE FROM type WHERE type.id = $id";
        $bindParam = array('id' => $id);
        $type = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $type;
    }

}