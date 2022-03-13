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

    public function getLanguagesGameList() {
        $sqlQuery = 'SELECT L.name as languageName, LG.isAudio FROM language_game LG INNER JOIN language L on L.id = LG.id_language WHERE LG.id_game = 1;';
        try {
            $languages = $this ->dbc->selectAll($sqlQuery);
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
        return $languageById;
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
        return $language;
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
        return $language;
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
        return $language;
    }

}