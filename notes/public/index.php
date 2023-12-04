<!-- este es el entry point de la app -->
<!-- se usa "->" para instanciar un metodo de una clase -->
<?php

/* este dir  me lleva a la raiz del proyecto */
const BASE_PATH = __DIR__ . '/../';

/* no le puedo aplicar el helper porque en este punto todavia no fue creado */
require BASE_PATH . 'Core/functions.php';

/* require base_path('Response.php');
require base_path('Database.php'); */

// con esta funcion autoloader puedo declarar instancias de classes que no hayan sido requeridas previamente
// en este caso, las classes Database y Response
spl_autoload_register(function ($class) {
    // Core\Database -> Core/Database
    /* 
    DIRECTORY_SEPARATOR tiene en cuenta el que realmente es segun el OS, 
    en windows es /
    */
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class ); //str_replace como replace de js
    require base_path("{$class}.php");
});

require base_path('Core/router.php');

