<?php

/**
 *
 */
class Editor {
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
        $this->title = $name;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getEditorsList($dbc) {
        $sqlQuery = 'SELECT * FROM editors ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $editors = $statement->fetchAll(PDO::FETCH_ASSOC);
        $editorsJson = json_encode($editors);
        return $editorsJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getEditorById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM editors WHERE id = :id';
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
    public static function addEditor($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO editors SET id = :id, name = :name';
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
    public static function updateEditor($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO editors SET id = :id, name = :name';
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
    public static function deleteEditor($dbc, $id) {
        $sqlQuery = "DELETE FROM editors WHERE editors.id = $id";
        $bindParam = array('id' => $id);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

}