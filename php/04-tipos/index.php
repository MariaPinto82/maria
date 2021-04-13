<?php
/**
 * Tipos de datos:
 * Integer: Los INT o enteros pueden tener distintos valores numericos enteros que se expresan con diferentes notaciones
 * 
 * Float o Double: Este tipo de datos son los numeros de punto flotante o los que llamariamos "numeros decimales", por ejemplo: 9.876;
 * Ambos tienen mucha precisión, pero double es el más preciso.
 * 
 * String: El tipo de datos String tambien conocido como cadena de caracteres.
 * 
 * Boolean: Se trata de un tipo logico. Sus posibles valores son true (verdadero) o false (falso);
 * 
 */
$texto = "Hola me llamo Mia";  // String;
$numero = 100; // Integer;
$decimal =27.9;  // Float o Double;
$verdadero = true;
echo gettype($decimal);
echo "<hr>";
echo gettype($numero);
echo "<hr>";
echo gettype($texto);
echo "<hr>";
echo gettype($verdadero);

// Debugear

$miNombre[] = "María Leonor Pinto Sabater";

$miNombre[] = "María Leonor Pinto Sabater";
echo "<hr>";
$miNombre[] = "María Leonor Pinto Sabater";
var_dump($miNombre);
echo "<hr>";