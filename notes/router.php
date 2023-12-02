<?php


$routes = require('routes.php');

/* ----------ROUTING-------------- */

/* esta funcion me maneja el ruteo */

function routeToController ($uri, $routes) {
    /* array_key_exists($key, $array) te dice si existe la key en el array */
    /* si la ruta a la que quiero entrar existe, entro */
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(); //en este caso la uso para responder cuando no encuetra una ruta
    }
};

/* esta es la funcion que se va a ejecutar cuando algo sale mal */
function abort($code = 404) { //default value = a js
    http_response_code($code); //asi se setea un codigo de respuesta
    require "views/{$code}.php";
    die();
};

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

/* parse_url($uri);  */
routeToController ($uri, $routes);