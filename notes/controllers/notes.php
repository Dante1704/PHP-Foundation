
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$query = "select * from notes";

$notes = $db->query($query)->fetchAll();

$heading = 'My Notes';

require "views/notes.view.php";