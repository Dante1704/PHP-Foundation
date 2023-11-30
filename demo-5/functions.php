<!-- aca pongo todas las funciones que van a ser usadas y las requiero donde las necesito -->

<?php 

/* esta funcion me permite "desechar" y de esa manera ver el contenido de una variable, matando todo el resto del codigo */
function dd($value){
/* con <pre></pre> puedo acomodar el contenido para ver */

    echo "<pre>";
    /* var_dump() me permite ver el contenido de la variable deseada */
    var_dump($value);
    echo "</pre>";
    /* con die() solo me muestra lo de arriba, mata todo el resto del codigo */
    die();
};
/* esto me permite tener mas legible las css classes */
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
};