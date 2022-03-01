<?php

/**
 *
 */
class Editor {
    /**
     * @var
     */
    private $id_editor;
    /**
     * @var
     */
    private $name;

    /**
     * @param int $id_editor
     * @param string $name
     */
    public function __construct($id_editor = '', $name = '') {

    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id_editor
     */
    public function setId($id_editor): void {
        $this->id = $id_editor;
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
     * @param $id_editor
     * @return false|string
     */
    public static function getEditorById($dbc, $id_editor) {
        $sqlQuery = 'SELECT * FROM editors WHERE id = :id';
        $bindParam = array('id' => $id_editor);
        $editorById = $dbc->select($sqlQuery, $bindParam);
        $editorByIdJson = json_encode($editorById);
        return $editorByIdJson;
    }

    /**
     * @param $dbc
     * @param $id_editor
     * @param $name
     * @return false|string
     */
    public static function addEditor($dbc, $id_editor, $name) {
        $sqlQuery = 'INSERT INTO editors SET id = :id, name = :name';
        $bindParam = array('id' => $id_editor, 'name' => $name);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

    /**
     * @param $dbc
     * @param $id_editor
     * @param $name
     * @return false|string
     */
    public static function updateEditor($dbc, $id_editor, $name) {
        $sqlQuery = 'UPDATE editors SET id = :id, name = :name';
        $bindParam = array('id' => $id_editor, 'name' => $name);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

    /**
     * @param $dbc
     * @param $id_editor
     * @return false|string
     */
    public static function deleteEditor($dbc, $id_editor) {
        $sqlQuery = "DELETE FROM editors WHERE editors.id = $id_editor";
        $bindParam = array('id' => $id_editor);
        $editor = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $editorJson = json_encode($editor);
        return $editorJson;
    }

}