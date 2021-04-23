<?php 
/**
 * Condicional IF:
 * 
 * if(condicion){
 *    instrucciones
 * }else{
 *    otras instrucciones
 * }
 */


/**
 * Operadores de comparacion en php:
 *  $a == $b (igual);
 *  $a === $b (identico);
 *  $a != $b (diferente);
 *  $a <> $b (diferente);
 *  $a !== $b (no identico);
 *  $a < $b (menor que...);
 *  $a > $b (mayor que...);
 *  $a <= $b (menor o igual que...);
 *  $a >= $b (mayor o igual que...);
 *  $a <=> $b (Nave espacial); // Un integer menor que, igual a, o mayor que cero 
 * cuando $a es respectivamente menor que, igual a, o mayor que $b. 
 * $a ?? $b ?? $c (Fusion de null); // 	El primer operando de izquierda a derecha que exista y no sea null.
 * null si no hay valores definidos y no son null. 
 */

$color = "rojo";

if($color === "rojo"){
    echo "El color es el rojo";
}else{
    echo "Es otro color";
};
echo "<hr>";

$year = 2021;
if($year == 2021){
    echo "Estamos en el 2021";
}else{
    echo "No estamos en la epoca";
}