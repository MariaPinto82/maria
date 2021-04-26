<?php
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'ASH'];
$numeros = [1, 45, 9, 13, 25, 87, 75, 65];
/** Ordenar **/
asort($cantantes);  // Ordena los arrays por orden alfabetico
var_dump($cantantes);

echo "<hr/>";

arsort($cantantes);
var_dump($cantantes);

echo "<hr/>";

sort($numeros);
var_dump($numeros);
echo "<hr/>";
// Añadir elementos a un array
$cantantes[] = "Natos";
array_push($cantantes, "Ventino");
var_dump($cantantes);
echo "<hr/>";

// Eliminar elementos de un array
array_pop($cantantes);
var_dump($cantantes);
echo "<hr/>";
unset($cantantes[2]);
var_dump($cantantes);
echo "<hr/>";

// Sacar un elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo "<hr/>";
// Darle la vuelta a un array
var_dump(array_reverse($numeros));
