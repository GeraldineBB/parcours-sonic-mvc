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

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $_SERVER['BASE_URI'].'/assets/images/'.$this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
