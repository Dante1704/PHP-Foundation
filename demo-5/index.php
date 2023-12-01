<!-- este es el entry point de la app -->
<!-- se usa "->" para instanciar un metodo de una clase -->
<?php

require'functions.php';
require'Database.php';
/* require'router.php'; */

$config = require('config.php');

$db = new Database($config['database']);


/* $_GET superglobal que brinda info sobre la get request */
$id = $_GET['id']; 

/* evitando sql inyection: se puede usar ? o :id pero luego al ejecutar la query le tengo que pasar [':id' => $id] */
$query = "select * from notes where user_id = ?"; //
$post = $db->query($query, [$id])->fetch();

/* fetchAll() me trae todos los resultados posibles, pero no es tan practico si solo quiero 1 */
/* $posts = $db->query("select * from posts where id > 1")->fetchAll(); */  

dd($post);
