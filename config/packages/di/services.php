<?php

use Twig\Environment;
use AttributesRouter\Router;
use Twig\Loader\FilesystemLoader;
use App\Controller\MainController;

return [

"controllers" => [
    MainController::class
],

Router::class => DI\create(Router::class)
              ->constructor(DI\get("controllers")),

Environment::class =>function(){
    $loader = new FilesystemLoader(dirname(__DIR__, 3) . "/templates");
    $twig   = new Environment($loader, [
        'cache' => dirname(__DIR__, 3) . "/var/cache/twig",
        'auto_reload' => true
    ]);
    return $twig;
}              
];