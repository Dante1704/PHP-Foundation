<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';


//$_SERVER['REQUEST_METHOD'] me permite actuar en base al tipo de request que estoy haciendo

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$_POST es un superglobal que me da informacion sobre la request POST en forma de associative array
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [ //avoiding sql inyections
        'body'=> $_POST['body'],
        'user_id' => 3, //hardcoded por ahora
    ]);

}

require"views/note-create.view.php";
