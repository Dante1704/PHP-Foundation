<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

//en esta variable se van a guardar los errores y luego van a ser mostrados en la view.
$error = [];

//validando inputs
//$error = []; //en esta variable se van a guardar los errores y luego van a ser mostrados en la view. 
//$_POST es un superglobal que me da informacion sobre la request POST en forma de associative array
//strlen() me da el largo de un string

/* 
    instancio la clase validator
    $validator = new Validator(); 
    ya no necesito instanciarla porque sus metodos son puros y no hay un uso de this. 
    */

//validacion de que haya cuerpo en el textarea
if (Validator::string($_POST['body'])) { //como es un static method lo puedo invocar asi
    $error['body'] = 'A body is required';
}

//validacion de que cantidad maxima de caracteres
if (Validator::maxStringLength($_POST['body'])) { //como es un static method lo puedo invocar asi
    $error['body'] = 'Max number of characteres reached. Max characters: 500.';
}

//si hay error, lo muestra en la vista de create
//empty Determines whether a variable is empty
if (!empty($error)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'error' => $error,
    ]);
}

// happy path
// pasó todas las verificaciones
$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [ //avoiding sql inyections
    'body' => $_POST['body'],
    'user_id' => 3, //hardcoded por ahora
]);

header('location: /notes'); //redirects
die();
