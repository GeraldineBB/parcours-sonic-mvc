<?php


// Je charge l'autoloader de composer
require_once __DIR__ . "/../vendor/autoload.php";


//====================================================================
// ROUTER
//====================================================================

// j' instancie la classe router 
$router = new AltoRouter();

// j'indique à Alto-router le sous dossier dans lequel on se trouve comme ça Alto-router ne va récupérer que ce qu'il y a après le "/" dans l'url
$router->setBasePath($_SERVER['BASE_URI']);


//==================================
// ROUTES
//==================================

// ROUTE AVEC MAINCONTROLLER


// la méthode map est plus complète qu'un tableau asso pour créer les routes. Elle a besoin de 4 paramètres : la méthode http, l'url de la route, la target (un tableau qui stocke le nom et la méthode du controllern un nom d'url)
$router->map(
    "GET",

    "/",

    [
        'controller' => '\\app\\controllers\\MainController',
        'method'     => 'home',
    ],
    "main-home"

);

$router->map(
    "GET",

    "/creators",

    [
        'controller' => '\\app\\controllers\\MainController',
        'method'     => 'creator',
    ],
    "main-creators"

);


$router->map(
    "GET",

    "/contact",

    [
        'controller' => '\\app\\controllers\\MainController',
        'method'     => 'contact',
    ],
    "main-contact"

);

// je trouve la bonne route en fonction de l'url donnée par le navigateur. $routeinfo renvoie 3 clés : un tableau avec les info de target, les paramètres (ex: id du character), et le nom de la route
$routeInfo = $router->match();


// je récupère les info nécessaires pour que le dispatcher fonctionne
$dispatchInfo = $routeInfo['target'];

$controllerName = $dispatchInfo['controller'];
$methodName     = $dispatchInfo['method'];

//====================================================================
// DISPATCHER 
//====================================================================

// je fais en sorte que nos routes s'affichent 
$controller = new $controllerName();
// pas besoin de paramètre mais je le laisse au cas où 
$controller->$methodName($routeInfo['params']);
