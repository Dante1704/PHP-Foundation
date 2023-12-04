
<?php 
/* 
$config = require('config.php');

$db = new Database($config['database']);

$query = "select * from notes";

$notes = $db->query($query)->get(); ahora este metodo me trae todos las filas de una tabla

$heading = 'My Notes';

require "views/notes/index.view.php";
 */

 
//AHORA:

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$notes = $db->query("select * from notes")->get();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);