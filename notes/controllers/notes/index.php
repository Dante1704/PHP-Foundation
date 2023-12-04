
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$query = "select * from notes";

$notes = $db->query($query)->get(); //ahora este metodo me trae todos las filas de una tabla

$heading = 'My Notes';

require "views/notes/index.view.php";