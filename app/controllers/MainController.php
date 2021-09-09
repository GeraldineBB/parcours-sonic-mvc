<?php

// j'indique où se trouve le controller
namespace app\controllers;

// je require les fichiers nécessaires
use PDO;
use app\utils\Database;
use app\models\Character;
use app\models\CoreModel;
use app\models\Type;
use app\models\Creator;

// je créee le controller qui va contenir les principales pages du site
class MainController
{
    /**
     * Méthode permettant dafficher une vue (HTML)
     * @param string $viewName
     * @param array $viewVars
     * @return void (pour dire que ça retourne rien du tout)
     */


    public function home()
    {
        // j'instancie la classe Character, on récupère un objet vide
        $characterModel = new Character;
        // j'utilise la méthode findAll pour récupérer les info de notre BDD et remplir notre objet
        $characterHome = $characterModel->findAll();

        // dump($characterHome);


        $typeModel = new Type;
        $typeHome = $typeModel->findAll();

        // dump($typeHome);

        // je passe les variables à la vue
        $this->show(
            'home',
            [
                'characterHome' => $characterHome,
                'typeHome'      => $typeHome,
            ]
        );
    }

    public function creator()
    {

        $creatorModel = new Creator;
        $creatorPage = $creatorModel->findAll();

        // dump($creatorPage); 

        $this->show(
            'creators',
            [
                'creatorPage' => $creatorPage,
            ]
        );
    }

    public function contact()
    {
        $this->show('contact');
    }


    protected function show($viewName, $viewVars = [])
    {

        // faire une global car la méthode shpw() n'a pas accès au router
        global $router;
        // dump($viewVars);


        // ===== Données SPECIFIQUES a CHAQUE page ========

        // On va prendre un tableau et pour chque clé du tableau, on va faire une variable.
        // on va pour chaque clé du tableau $viewVars créer une variable du nom de la clé et avec la même valeur 
        // Ca nous permet d'utiliser les variables plus facilement pour la dynamisation des pages

        extract($viewVars);



        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }
}
