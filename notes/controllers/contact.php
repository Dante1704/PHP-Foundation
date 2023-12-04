<?php 
/*
ANTES: 
$heading = 'Contact Us';
require "views/contact.view.php";
 */

//AHORA:
view("contact.view.php", [
    'heading' => 'Contact Us',
]);