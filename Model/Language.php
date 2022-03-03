<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Language {
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
    public function getLanguagesList() {
        $sqlQuery = 'SELECT * FROM language ORDER BY id';
        try {
            $languages = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $languages;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getLanguageById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM language WHERE id = :id';
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
    public function addLanguage($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO language SET id = :id, name = :name';
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
    public function updateLanguage($dbc, $id, $name) {
        $sqlQuery = 'UPDATE language SET id = :id, name = :name';
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
    public function deleteLanguage($dbc, $id) {
        $sqlQuery = "DELETE FROM language WHERE language.id = $id";
        $bindParam = array('id' => $id);
        $language = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $languageJson = json_encode($language);
        return $languageJson;
    }

}