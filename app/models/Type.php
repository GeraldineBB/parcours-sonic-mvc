<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Type extends CoreModel
{

    // =========================================================
    //  Properties
    // =========================================================

    // protected $id;
    // protected $name;
    // protected $created_at;
    // protected $updated_at;


    // =========================================================
    //  Methods
    // =========================================================

    /**
     * Find a type by its ID to make jointure between type and character
     * @return self 
     */

    public function find( $id )
    {

      $pdo = Database::getPDO();

      $sql = "SELECT * FROM `type` WHERE `id` = ".$id;

      $statement = $pdo->query( $sql );

      $typeObject = $statement->fetchObject( self::class );

      return $typeObject;
    }
    

    /**
     * Find all type
     * @return self [] 
     */

    
    public function findAll()
    {

        $pdo = Database::getPDO(); 

        $sql = "SELECT * FROM `type`"; 

        $statement = $pdo->query($sql); 

        $allTypeObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class); 

        return $allTypeObjects; 
    }


    // =========================================================
    //  Getters & Setters
    // =========================================================





}
