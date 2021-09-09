<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Creator extends CoreModel
{

    // =========================================================
    //  Properties
    // =========================================================

    protected $picture;
    protected $description;
    protected $page_order;



    // =========================================================
    //  Methods
    // =========================================================


    public function findAll()
    {

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `creator` ORDER BY `page_order`";

        $statement = $pdo->query($sql);

        $allCreatorObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $allCreatorObjects;
    }





    // =========================================================
    //  Getters & Setters
    // =========================================================



    /**
     * Get the value of page_order
     */
    public function getPage_order()
    {
        return $this->page_order;
    }

    /**
     * Set the value of page_order
     *
     * @return  self
     */
    public function setPage_order($page_order)
    {
        $this->page_order = $page_order;

        return $this;
    }
}
