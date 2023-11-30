<!-- este es el entry point de la app -->

<?php

require'functions.php';
/* require'router.php'; */



/* string connection to the db */
$dsn = "mysql:host=localhost;port=3306;dbname=demo5;user=root;charset=utf8mb4";

/* nueva conexion a la db */
$pdo = new PDO($dsn);

/* preparacion y ejecucion de la query */
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC); /*PDO::FETCH_ASSOC para que me muestre la respuesta en forma de assoc array*/

foreach ($posts as $post) {
   echo "<li>" . $post['title'] . "</li>";
}
