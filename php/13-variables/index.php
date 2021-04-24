<?php

/**
 * Variables Globales: son las que se declaran fuera de una función y estan disponibles 
 * dentro y fuera de las funciones.
 * 
 * Variables Locales: son las que se definen dentro de una función y no pueden ser usadas
 * fuera de la función, solo estan disponibles dentro. A no ser que hagamos un return.
 */

$frase = "Ni los genios son ten genios, ni los mediocres tan mediocres";


echo $frase;

function holaMundo()
{

    global $frase;  // Aqui declaramos que la variable es global.
    echo "<h1>$frase</h1>";

    $year = 2021;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();
