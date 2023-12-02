<?php

$heading = 'Create Note';

/* $_SERVER['REQUEST_METHOD'] me permite actuar en base al tipo de request que estoy haciendo */
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$_POST es un superglobal que me da informacion sobre la request POST en forma de associative array
    dd($_POST);
}

require"views/note-create.view.php";
