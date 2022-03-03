<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Platform {
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
     * @param
     * @return false|string
     */
    public function getPlatformsList() {
        $sqlQuery = 'SELECT * FROM platform ORDER BY id';
        try {
            $platforms = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $platforms;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function getPlatformById($id) {
        $sqlQuery = 'SELECT * FROM platform WHERE id = :id';
        $bindParam = array('id' => $id);
        $platformById = $this->dbc->select($sqlQuery, $bindParam);
        $platformByIdJson = json_encode($platformById);
        return $platform;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addCategory($id, $name) {
        $sqlQuery = 'INSERT INTO platform SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $platform = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $platformJson = json_encode($platform);
        return $platform;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateCategory($id, $name) {
        $sqlQuery = 'UPDATE platform SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $platform = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $platformJson = json_encode($platform);
        return $platform;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function deleteCategory($id) {
        $sqlQuery = "DELETE FROM platform WHERE platform.id = $id";
        $bindParam = array('id' => $id);
        $platform = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $platformJson = json_encode($platform);
        return $platform;
    }

}