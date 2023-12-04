<!-- aca pongo todas las helpers functions  -->
<?php 

use Core\Response;

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
};

function authorize($condition, $status = Response::FORBIDDEN) {
    if(! $condition) {
    abort($status); //lo traigo de la class Response donde tengo representados los codigos de respuestas
    }
}

/* este helper me ayuda a establecer el path de los archivos que estan en la raiz del proyecto */
function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    //extract($array) me transforma key=>value de un array en
    //variables declaradas como $key = value
    extract($attributes);
    require base_path('views/'. $path); // /views/index.view.php
}