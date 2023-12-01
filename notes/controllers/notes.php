
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$query = "select * from notes where user_id = 3";

$notes = $db->query($query)->fetchAll();

$heading = 'My Notes';

require "views/notes.view.php";