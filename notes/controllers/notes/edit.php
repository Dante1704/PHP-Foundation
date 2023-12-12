<?php

use Core\Database;
use Core\App;

$db = App::container()->resolve(Database::class);

$currentUserId = 3; //harcoded

$note = $db->query(
    "select * from notes where id = :id",
    ['id' => $_GET['id']]
)->findOrFail(); //por defecto es 404 si falla

authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'error' => [],
    'note' => $note,
]);
