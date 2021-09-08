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

    public function find( $id )
    {

      $pdo = Database::getPDO();

      $sql = "SELECT * FROM `type` WHERE `id` = ".$id;

      $statement = $pdo->query( $sql );

      $typeObject = $statement->fetchObject( self::class );

      return $typeObject;
    }
    
    
    
    
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
