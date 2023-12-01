
<?php 

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'];

$query = "select * from notes where id = ?";

$note = $db->query($query, [$id])->fetch();

require "views/note.view.php";