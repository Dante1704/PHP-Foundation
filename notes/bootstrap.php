<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

//bindeo una funcion que es responsable de crear la db
$container->bind('Core\Database', function () {
    $config = require base_path('config.php');
    return new Database($config['database']);
} /* resolver function */);

//cada vez que quiero crear la instancia de la db usare el metodo resolve de la class Container
//$db = $container->resolve('Core\Database');

App::setContainer($container);
//dd(App::$container); ok.esta guardado el contenedor de la db
