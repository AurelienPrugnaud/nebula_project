<?php

/**
 *
 */
class Language {
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
    public static function getLanguagesList($dbc) {
        $sqlQuery = 'SELECT * FROM languages ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $languages = $statement->fetchAll(PDO::FETCH_ASSOC);
        $languagesJson = json_encode($languages);
        return $languagesJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getLanguageById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM languages WHERE id = :id';
        $bindParam = array('id' => $id);
        $languageById = $dbc->select($sqlQuery, $bindParam);
        $languageByIdJson = json_encode($languageById);
        return $languageByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function addLanguage($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO languages SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $language = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $languageJson = json_encode($language);
        return $languageJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function updateLanguage($dbc, $id, $name) {
        $sqlQuery = 'UPDATE languages SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $language = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $languageJson = json_encode($language);
        return $languageJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteLanguage($dbc, $id) {
        $sqlQuery = "DELETE FROM languages WHERE languages.id = $id";
        $bindParam = array('id' => $id);
        $language = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $languageJson = json_encode($language);
        return $languageJson;
    }

}