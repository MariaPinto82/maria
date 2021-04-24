<?php
// Funciones predefinidas

/** Debugear **/
$nombre = "maria";
var_dump($nombre);  

echo "<hr/>";

/** Fechas **/
echo date('d-M-y');

echo "<hr/>";
echo time();  // Saca la fecha en formato unix.

echo "<hr/>";
/** Matematicas **/
echo "Raiz cuadrada de 10: ".sqrt(10);

echo "<hr/>";

echo "Numero aleatorio entre el 10 y el 40: ".rand(10, 40);