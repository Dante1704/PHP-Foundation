
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'];


//esta query tiene el problema de que puedo estar trayendo notas que no son del current user
$query = "select * from notes where id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->fetch();

//aca tengo en cuenta si me trajo realmente una nota o no
if(! $note) {
    abort(); //por defecto es el 404 y en este caso esta bien
} 

//aca tengo en cuenta si la nota le pertenece al current user
//en este caso estoy hardcodeando el user_id porque todavia no tengo hecha la authentication
if($note['user_id'] !== 3) {
    abort(403); //forbidden
}
/* dd($note); */

require "views/note.view.php";