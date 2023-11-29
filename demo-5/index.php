
<?php 
require "functions.php";
    
$heading = 'Home';

/* informacion sobre lo que estoy mostrando
var_dump(['alsdfj']); */

/* funcion para inspeccionar el valor cualquier una variable */
/* function dd($value){
    con <pre></pre> puedo acomodar el contenido para ver

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    con die() solo me muestra lo de arriba, mata todo el resto del codigo
    die();
}; */

/* $_SERVER es una Superglobal que puede ser accedida en cualquier parte del documento, es un array */
/* dd($_SERVER);  */

/* echo $_SERVER['REQUEST_URI']; */


/* if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'bg-gray-900 text-white';
} else {
    echo 'text-gray-300';
}; */

/* misma condicion que arriba pero con operador ternario */
/* echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300' */

/* esto me permite tener mas legible las css classes */
/* function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}; */
            

/* aca cargo la vista para ser mostrado el contenido */

require "views/index.view.php";