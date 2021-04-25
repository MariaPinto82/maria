<?php
/**
 * Arrays: Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores
 * con claves. Este tipo se optimiza para varios usos diferentes; se pueden emplear como un array, lista (vector), tabla asociativa (tabla hash - una
 * implementación de un mapa), diccionario, coleccion, pila, cola, y posiblemente más. Ya que los vectores de un array pueden ser otros arrays, tambien
 * son posibles arboles y arrays multidimensionales.
 * 
 * Una explicacion sobre tales estructuras de datos esta fuera del alcance de este manual, aunque se proporciona al menos un ejemplo
 * de cada uno de ellos.
 */

/**
 * Sintaxis de un array:
 * Un array puede ser creado con el constructor del lenguaje array(). Éste toma cualquier número de parejas clave => valor como argumentos
 * 
 * array[
 * clave => valor,
 * clave2 => valor2,
 * clave3 => valor3,
 * ...
 * ];
 * La coma después del último elemento del array es opcional, pudiendose omitir. Esto normalmente se hace para arrays de una unica linea, es
 * decir, es preferible un array(1, 2) que array(1, 2, ). Por otra parte, para arrays multilinea, la coma final se usa frecuentemente, ya que 
 * permite una adicion mas sencilla de nuevos elementos al final.
 * 
 * Ejemplo de un array simple:
 * 
 *    $array = array[
 *    "foo" => "bar",
 *    "bar" => "foo",
 * ];
 */

$pelicula = "Batman";
$peliculas = array('batman', 'spiderman', 'xmen', 'el señor de los anillos');  // Creando el primer array
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

var_dump($peliculas[2]); 
echo "<hr/>";
var_dump($cantantes[0]);