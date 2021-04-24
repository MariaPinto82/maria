<?php
/**
 * Ejercicio 3: Escribe un programa que imprima por pantalla los cuadrados
 * (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
 * PD: Utilizar bucle while;
 */

// Com el bucle while
$contador = 0;
while($contador <= 40){
    $cuadrado = $contador*$contador;
    $contador++;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
}

echo "<hr>";
// Con el bucle for
for($contar = 0; $contar <=40; $contar++){
    $cuadrado1 = $contar*$contar;
    echo "<h3>El cuadrado de $contar es $cuadrado1</h3>";
}