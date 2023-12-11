<!-- 
esto componente es una copia de show,
solo que ahora no tengo el condicional,
porque ahora si tengo una ruta especifica para delete y otra para show
-->
<?php

use Core\Database;

/*$config = require base_path('config.php');
$db = new Database($config['database']); */

use Core\App;

$db = App::container()->resolve(Database::class); //Database::class es lo mismo que decir 'Core\Database'

//en este caso estoy hardcodeando el user_id porque todavia no tengo hecha la authentication
$currentUserId = 3;

//primero valido que la nota existe y que es del currentUser,
//sino, no debo poder borrarla.

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

//todo verificado, asique borro
$db->query("delete from notes where id = :id", [
    'id' => $_POST['id']
]);

//una vez borrada la nota, redirige a la ruta donde se muestran todas las notas
header('location: /notes');
exit();
