<?php

/**
 *
 */
class Page {
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $title;
    /**
     * @var
     */
    private $template;
    /**
     * @var
     */
    private $url;

    /**
     * @param int $id
     * @param string $title
     * @param string $template
     * @param string $url
     */
    public function __construct($id = '', $title = '', $template = '', $url = '') {

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
    public function getTemplate() {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template): void {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void {
        $this->url = $url;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getPagesList($dbc) {
        $sqlQuery = 'SELECT * FROM pages ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $pages = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pagesJson = json_encode($pages);
        return $pages;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getPageById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM pages WHERE id = :id';
        $bindParam = array('id' => $id);
        $pageById = $dbc->select($sqlQuery, $bindParam);
        $pageByIdJson = json_encode($pageById);
        return $pageByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $title
     * @param $template
     * @param $url
     * @return false|string
     */
    public static function addPage($dbc, $id, $title, $template, $url) {
        $sqlQuery = 'INSERT INTO pages SET id = :id, title = :title, template = :template, url = :url';
        $bindParam = array('id' => $id, 'title' => $title, 'template' => $template, 'url' => $url);
        $page = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pageJson = json_encode($page);
        return $pageJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $title
     * @param $template
     * @param $url
     * @return false|string
     */
    public static function updatePage($dbc, $id, $title, $template, $url) {
        $sqlQuery = 'INSERT INTO pages SET id = :id, title = :title, template = :template, url = :url';
        $bindParam = array('id' => $id, 'title' => $title, 'template' => $template, 'url' => $url);
        $page = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pageJson = json_encode($page);
        return $pageJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deletePage($dbc, $id) {
        $sqlQuery = "DELETE FROM pages WHERE pages.id = $id";
        $bindParam = array('id' => $id);
        $page = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $pageJson = json_encode($page);
        return $pageJson;
    }

}