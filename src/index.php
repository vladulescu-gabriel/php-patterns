<?php

require_once('../vendor/autoload.php');

use App\Render\Router;

$router = new Router();
$router
    ->addRoute('/builder-pattern', 'BuilderPatternExample')
    ->addRoute('/factory-pattern', 'FactoryPatternExample')
    ->addRoute('/singleton-pattern', 'SingletonPatternExample')
    ->addRoute('/adapter-pattern', 'AdapterPatternExample')
    ->addRoute('/prototype-pattern', 'PrototypePatternExample')
    ->addRoute('/bridge-pattern', 'BridgePatternExample')
;
$router->render();