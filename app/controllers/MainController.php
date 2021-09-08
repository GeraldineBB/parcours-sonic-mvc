<?php 

namespace app\controllers;

use PDO;
use app\utils\Database;
use app\models\Character;
use app\models\CoreModel; 
use app\models\Type;


class MainController 
{
    
    public function home() 
    {
        $characterModel = new Character; 
        $characterHome = $characterModel->findAll();

        dump($characterHome);


        $typeModel = new Type; 
        $typeHome = $typeModel->findAll(); 

        dump($typeHome);

        $this->show('home', 
        [
            'characterHome' => $characterHome, 
            'typeHome'      => $typeHome, 
        ]); 
    }

    public function creators() 
    {
        $this->show('creators'); 
    }

    protected function show($viewName, $viewVars = [])
    {

    global $router;
    dump( $viewVars );


    // ===== Données SPECIFIQUES a CHAQUE page ========

    // On va prendre un tableau et pour chque clé du tableau, on va faire une variable.
    // on va pour chaque clé du tableau $viewVars créer une variable du nom de la clé et avec la même valeur 

    extract( $viewVars );
    

    //===== Données COMMUNES à TOUTES les pages ========


    require_once __DIR__.'/../views/partials/header.tpl.php';
    require_once __DIR__.'/../views/'.$viewName.'.tpl.php';

    }   

}
