<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokedexController.php';

switch($uri_parse)
{
    case '/welcome':
        include 'View/modules/Login/welcome.php';
    break;

    case '/login':
        include 'View/modules/Login/login.php';
    break;

    case '/home':
        include 'View/modules/Pagina_Inicial/home.php';
    break;
    
    case '/pokedex':
        PokedexController::index();
    break;

    case '/pokedex/form':
        PokedexController::form();
    break;

    case '/pokedex/save':
        PokedexController::save();
    break;

    case '/pokedex/delete':
        PokedexController::delete();
    break;

    default:
        echo "erro 404";
    break;
    
}