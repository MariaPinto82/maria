<?php
/**
 * Constantes: Una constante es un identificador (nombre) para un valor simple. Como el nombre sugiere, este valor no puede
 * variar durante la ejecución del script (a excepción de las constantes magicas, que en realidad no son constantes).
 * Por defecto, una constante distingue mayúsculas de minúsculas. Por convención, los identificadores de constantes siempre se
 * declaran en mayúsculas.
 */

/**
 * Diferencia entre variable y constante: A una variable se le puede cambiar el valor en cualquier momento, a una constante no;
 * La constante es muy similar a la variable, con la diferencia de que su valor no puede cambiar en ningun momento en la ejecucion del programa;
 */

// Definir una constante;
define('nombre', 'maria');
define('web', 'mariapintoweb.es');

echo "<h1>".nombre."</h1>";
echo "<br>";
echo "<h1>".web."</h1>";
echo "<br>";

// Variable
$web = "leonorweb.es";
echo "<h1>".$web."</h1>";
$web = "mariaweb.es";
echo "<h1>".$web."</h1>";

