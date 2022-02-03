<?php

/**
 *
 */
class Category {
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
    public static function getCategoriesList($dbc) {
        $sqlQuery = 'SELECT * FROM categories ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $categories = $statement->fetchAll(PDO::FETCH_ASSOC);
        $categoriesJson = json_encode($categories);
        return $categoriesJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getCategoryById($dbc, $id) {
        $sqlQuery = 'SELECT * FROM categories WHERE id = :id';
        $bindParam = array('id' => $id);
        $categoryById = $dbc->select($sqlQuery, $bindParam);
        $categoryByIdJson = json_encode($categoryById);
        return $categoryByIdJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function addCategory($dbc, $id, $name) {
        $sqlQuery = 'INSERT INTO categories SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public static function updateCategory($dbc, $id, $name) {
        $sqlQuery = 'UPDATE categories SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteCategory($dbc, $id) {
        $sqlQuery = "DELETE FROM categories WHERE categories.id = $id";
        $bindParam = array('id' => $id);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

}