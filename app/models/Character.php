<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Character extends CoreModel
{

    // =========================================================
    //  Properties
    // =========================================================

    // j'indique les propriétés spécifiques à la table Character
    protected $description;
    protected $picture;

    // foreign key
    protected $type_id;


    // =========================================================
    //  Methods
    // =========================================================


    /**
     * Find all characters
     * @return self [] 
     */

    public function findAll()
    {

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `character` ORDER BY `name` ASC";

        $statement = $pdo->query($sql);


        $allCharacterObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        // allCharacterObjects va contenir un tableau de plusieurs objets de type character !! 

        return $allCharacterObjects;
    }


    // =========================================================
    //  Getters & Setters
    // =========================================================

    // j'intègre tous les getters et setters pour exploiter les données qui sont à la base "protected"

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

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        // afin d'éviter les erreurs je mets le bon lien directement dans le get
        return $_SERVER['BASE_URI'] . '/assets/images/' . $this->picture;
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
     * Get the value of type_id
     */
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    // je souhaite récupérer les type des characters
    /**
     * Get the type's character
     *
     * @return  \app\models\Type
     */
    public function getType()
    {
        $typeModel = new Type();
        $characterType = $typeModel->find($this->type_id);
        return $characterType;
    }
}
