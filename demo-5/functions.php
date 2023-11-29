
<?php 

function dd($value){
/* con <pre></pre> puedo acomodar el contenido para ver */

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    /* con die() solo me muestra lo de arriba, mata todo el resto del codigo */
    die();
};
/* esto me permite tener mas legible las css classes */
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
};