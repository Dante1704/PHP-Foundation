
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'];

//esta query tiene el problema de que puedo estar trayendo notas que no son del current user
$query = "select * from notes where id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();
 
//en este caso estoy hardcodeando el user_id porque todavia no tengo hecha la authentication
$currentUserId = 3;

//aca tengo en cuenta si la nota le pertenece al current user, con el nuevo helper desarrollado
authorize($note['user_id'] === $currentUserId);
/* dd($note); */

require "views/note.view.php";