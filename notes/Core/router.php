<?php

namespace Core;

/* ----------ROUTING-------------- */

class Router
{
    protected $routes = []; //esta protegido y no esta disponible para el mundo exterior

    //Este metodo es llamado dentro de los demas para setear las rutas existentes
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }
    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }
    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($code = 404)
    { //default value = a js
        http_response_code($code); //asi se setea un codigo de respuesta
        require base_path("views/{$code}.php");
        die();
    }
}
/*  
esta funcion me maneja el ruteo

function routeToController ($uri, $routes) {
    array_key_exists($key, $array) te dice si existe la key en el array 
    si la ruta a la que quiero entrar existe, entro 
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort(); //en este caso la uso para responder cuando no encuetra una ruta
    }
};

esta es la funcion que se va a ejecutar cuando algo sale mal 
function abort($code = 404) { //default value = a js
    http_response_code($code); //asi se setea un codigo de respuesta
    require base_path("views/{$code}.php");
    die();
};

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
parse_url($uri); 
routeToController($uri, $routes);
 */
