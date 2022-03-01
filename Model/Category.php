<?php

/**
 *
 */
class Category {
    /**
     * @var
     */
    private $id_category;
    /**
     * @var
     */
    private $name;

    /**
     * @param int $id_category
     * @param string $name
     */
    public function __construct($id_category = '', $name = '') {

    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id_category
     */
    public function setId($id_category): void {
        $this->id = $id_category;
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
     * @param $id_category
     * @return false|string
     */
    public static function getCategoryById($dbc, $id_category) {
        $sqlQuery = 'SELECT * FROM categories WHERE id = :id';
        $bindParam = array('id' => $id_category);
        $categoryById = $dbc->select($sqlQuery, $bindParam);
        $categoryByIdJson = json_encode($categoryById);
        return $categoryByIdJson;
    }

    /**
     * @param $dbc
     * @param $id_category
     * @param $name
     * @return false|string
     */
    public static function addCategory($dbc, $id_category, $name) {
        $sqlQuery = 'INSERT INTO categories SET id = :id, name = :name';
        $bindParam = array('id' => $id_category, 'name' => $name);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

    /**
     * @param $dbc
     * @param $id_category
     * @param $name
     * @return false|string
     */
    public static function updateCategory($dbc, $id_category, $name) {
        $sqlQuery = 'UPDATE categories SET id = :id, name = :name';
        $bindParam = array('id' => $id_category, 'name' => $name);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

    /**
     * @param $dbc
     * @param $id_category
     * @return false|string
     */
    public static function deleteCategory($dbc, $id_category) {
        $sqlQuery = "DELETE FROM categories WHERE categories.id = $id_category";
        $bindParam = array('id' => $id_category);
        $category = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $categoryJson = json_encode($category);
        return $categoryJson;
    }

}