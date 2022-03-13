<?php

namespace Aurelien\Nebula;

use Aurelien\Nebula\Database;

/**
 *
 */
class Category {
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;


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
     * @param $this->dbc
     * @return false|string
     */
    public function getCategoriesList() {
        $sqlQuery = 'SELECT * FROM category ORDER BY id';
        try {
            $categories = $this->dbc->selectAll($sqlQuery);

        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        
        return $categories;
    }

    public function getCategoriesGameList() {
        $sqlQuery = 'SELECT C.name as categoryName FROM category_game CG INNER JOIN category C on C.id = CG.id_category WHERE CG.id_game = 1; ';
        try {
            $categories = $this ->dbc->selectAll($sqlQuery);
        } catch(\Exception $e) {
            throw new \Exception($e);
        };
        return $categories;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function getCategoryById($id) {
        $sqlQuery = 'SELECT * FROM category WHERE id = :id';
        $bindParam = array('id' => $id);
        $categoryById = $this->dbc->select($sqlQuery, $bindParam);
        return $categoryById;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function addCategory($id, $name) {
        $sqlQuery = 'INSERT INTO category SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $category = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $category;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @param $name
     * @return false|string
     */
    public function updateCategory($id, $name) {
        $sqlQuery = 'UPDATE category SET id = :id, name = :name';
        $bindParam = array('id' => $id, 'name' => $name);
        $category = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $category;
    }

    /**
     * @param $this->dbc
     * @param $id
     * @return false|string
     */
    public function deleteCategory($id) {
        $sqlQuery = "DELETE FROM category WHERE category.id = $id";
        $bindParam = array('id' => $id);
        $category = $this->dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        return $category;
    }

}