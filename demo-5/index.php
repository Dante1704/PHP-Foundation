<!-- este es el entry point de la app -->
<!-- se usa "->" para instanciar un metodo de una clase -->
<?php

require'functions.php';
/* require'router.php'; */
require'Database.php';

$db = new Database();

/* ferchAll() me trae todos los resultados posibles, pero no es tan practico si solo quiero 1 */
$posts = $db->query("select * from posts where id > 1")->fetchAll();  
$post = $db->query("select * from posts where id > 1")->fetch();

foreach ($posts as $post) {
   echo "<li>" . $post['title'] . "</li>";
}
