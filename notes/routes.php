<?php

/* declaro mis rutas en un associative array */
/* return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/contact' => 'controllers/contact.php',
]; */

/* 
en este tipo de router,
no esto declarando el metodo  http que estoy usando,
entonces tengo que modificar esto 
para que sea algo asi $router->get('/', 'controllers/index.php')
*/

//Ahora: Nueva manera de declarar mis rutas usando la clase Router
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

//crear, te permite crear. Muestra el form de creacion
$router->get('/notes/create', 'controllers/notes/create.php');
//store, guarda el nuevo regitro y redirige. 
$router->post('/notes', 'controllers/notes/store.php');
