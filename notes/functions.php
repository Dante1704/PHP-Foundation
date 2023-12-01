<!-- aca pongo todas las funciones que van a ser usadas y las requiero donde las necesito -->

<?php 

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
};
