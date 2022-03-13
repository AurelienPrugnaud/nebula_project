<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Paragraph {
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $title;
    /**
    * @var
    */
   public $paragraph;
   /**
   * @var
   */
  public $idGame;

    /**
     * @param int $id
     * @param string $title
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
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getParagraph() {
        return $this->paragraph;
    }

    /**
     * @param mixed $paragraph
     */
    public function setParagraph($paragraph): void {
        $this->title = $paragraph;
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
    public function getParagraphsList() {
        $sqlQuery = 'SELECT * FROM paragraph ORDER BY id';
        try {
            $paragraphs = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $paragraphs;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function getParagraphById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM paragraph WHERE id = :id';
        $bindParam = array('id' => $id);
        $paragraphById = $dbc->select($sqlQuery, $bindParam);
        return $paragraphById;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $title
     * @return false|string
     */
    public function addParagraph($dbc, $id, $title, $paragraph) {
        $sqlQuery = 'INSERT INTO paragraph SET id = :id, title = :title, paragraph = :paragraph, id_game = :idGame';
        $bindParam = array('id' => $id, 'title' => $title, 'idGame' => $idGame);
        $paragraph = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $paragraph;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $title
     * @return false|string
     */
    public function updateparagraph($dbc, $id, $title, $paragraph) {
        $sqlQuery = 'UPDATE paragraph SET id = :id, title = :title, paragraph = :paragraph';
        $bindParam = array('id' => $id, 'title' => $title);
        $paragraph = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $paragraph;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public function deleteparagraph($dbc, $id) {
        $sqlQuery = "DELETE FROM paragraph WHERE paragraph.id = $id";
        $bindParam = array('id' => $id);
        $paragraph = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $paragraph;
    }

}