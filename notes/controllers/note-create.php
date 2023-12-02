<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';


//$_SERVER['REQUEST_METHOD'] me permite actuar en base al tipo de request que estoy haciendo

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* validando inputs */
    $error = []; //en esta variable se van a guardar los errores y luego van a ser mostrados en la view.
    //$_POST es un superglobal que me da informacion sobre la request POST en forma de associative array
    //strlen() me da el largo de un string
    //validacion de que haya cuerpo en el textarea
    if(strlen($_POST['body']) === 0) { 
        $errors['body'] = 'A body is required';
    }

    //validacion de que cantidad maxima de caracteres
    if(strlen($_POST['body']) > 500) { 
        $errors['body'] = 'Max number of characteres reached. Max characters: 500.';
    }

    //validacion de que no hay ningun tipo de error en general
    //empty Determines whether a variable is empty
    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [ //avoiding sql inyections
            'body'=> $_POST['body'],
            'user_id' => 3, //hardcoded por ahora
    ]);
    }

}

require"views/note-create.view.php";
