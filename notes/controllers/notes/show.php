
<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

//en este caso estoy hardcodeando el user_id porque todavia no tengo hecha la authentication
$currentUserId = 3;

//AHORA
$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

//aca tengo en cuenta si la nota le pertenece al current user, con el nuevo helper desarrollado
authorize($note['user_id'] === $currentUserId);
//dd($note);

//$heading = 'Note';
//require "views/notes/show.view.php";

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);




//ANTES
/* 
// por el momento tengo que asumir que uso "POST" para hacer delete
// porque el form entiende solo de "POST" o "GET"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //primero valido que la nota existe y que es del currentUser,
    //sino, no debo poder borrarla.

    $note = $db->query("select * from notes where id = :id", [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    //todo verificado, asique borro
    $db->query("delete from notes where id = :id", [
        'id' => $_POST['id']
    ]);

    //una vez borrada la nota, redirige a la ruta donde se muestran todas las notas
    header('location: /notes');
    exit();
} else {

    $note = $db->query("select * from notes where id = :id", [
        'id' => $_GET['id']
    ])->findOrFail();

    //aca tengo en cuenta si la nota le pertenece al current user, con el nuevo helper desarrollado
    authorize($note['user_id'] === $currentUserId);
    //dd($note);

    //$heading = 'Note';
    //require "views/notes/show.view.php";

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note,
    ]);
}
 */