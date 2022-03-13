<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Pegi {
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    private $img;

    /**
     * @param int $id
     * @param string $name
     * @param string $img
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
     * @param 
     * @return false|string
     */
    public function getPegisList() {
        $sqlQuery = 'SELECT * FROM pegi ORDER BY id';
        try {
            $pegis = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $pegis;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getPegiById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM pegi WHERE id = :id';
        $bindParam = array('id' => $id);
        $pegiById = $dbc->select($sqlQuery, $bindParam);
        return $pegiById;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @param $img
     * @return false|string
     */
    public function addPegi($dbc, $id, $name, $img) {
        $sqlQuery = 'INSERT INTO pegi SET id = :id, name = :name, img = :img';
        $bindParam = array('id' => $id, 'name' => $name, 'img' => $img);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $pegi;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @param $img
     * @return false|string
     */
    public function updatePegi($dbc, $id, $name, $img) {
        $sqlQuery = 'UPDATE pegi SET id = :id, name = :name, img = :img';
        $bindParam = array('id' => $id, 'name' => $name, 'img' => $img);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $pegi;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deletePegi($dbc, $id) {
        $sqlQuery = "DELETE FROM pegi WHERE pegi.id = $id";
        $bindParam = array('id' => $id);
        $pegi = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $pegi;
    }

}