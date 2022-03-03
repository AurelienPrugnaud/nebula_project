<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Editor {
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
    public function getEditorsList() {
        $sqlQuery = 'SELECT * FROM editor ORDER BY id';
        try {
            $editors = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $editors;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getEditorById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM editor WHERE id = :id';
        $bindParam = array('id' => $id);
        $editorById = $dbc->select($sqlQuery, $bindParam);
        $editorByIdJson = json_encode($editorById);
        return $editorByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addEditor($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO editor SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateEditor($dbc, $id, $name) {
        $sqlQuery = 'UPDATE editor SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deleteEditor($dbc, $id) {
        $sqlQuery = "DELETE FROM editor WHERE editor.id = $id";
        $bindParam = array('id' => $id);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

}