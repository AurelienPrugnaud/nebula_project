<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Image {
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
   public $idGame;

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
     * @return mixed
     */
    public function getIdgame() {
        return $this->idGame;
    }

    /**
     * @param mixed $idGame
     */
    public function setIdgame($idGame): void {
        $this->idGame = $idGame;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public function getImagesList() {
        $sqlQuery = 'SELECT * FROM image ORDER BY id';
        try {
            $images = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $images;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getImageById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM image WHERE id = :id';
        $bindParam = array('id' => $id);
        $ImageById = $dbc->select($sqlQuery, $bindParam);
        return $ImageById;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addImage($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO image SET id = :id, name = :name, id_game = :idGame';
        $bindParam = array('id' => $id, 'name' => $name, 'idGame' => $idGame);
        $Image = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $Image;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateImage($dbc, $id, $name) {
        $sqlQuery = 'UPDATE image SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $Image = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $Image;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deleteImage($dbc, $id) {
        $sqlQuery = "DELETE FROM image WHERE image.id = $id";
        $bindParam = array('id' => $id);
        $Image = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $Image;
    }

}