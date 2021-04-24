<?php
/**
 * Funciones: 
 * Una función es un conjunto de intrucciones agrupadas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como queramos.
 * 
 * 
 * Sintaxis de una función en php:
 * 
 * function nombreDeMiFuncion($parametro){
 *   // Bloque o conjunto de instrucciones
 * }
 * 
 * nombreDeMiFuncion($miParametro);
 * nombreDeMiFuncion($miParametro);
 */

// Ejemplo 1: 
function muestraNombres(){
    echo "Maria Leonor Pinto Sabater <br/>";
    echo "Maria Pinto Sabater <br/>";
    echo "Leonor Pinto Sabater <br/>";
    echo "<hr/>";
}

// Invocar Funcion
muestraNombres();
muestraNombres();
muestraNombres();


// Ejemplo 2:
function tablas($numero){
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";

    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;

        echo "$numero x $i = $operacion <br/>";
    }
}

/*if(isset($_GET['numero'])){
    tablas($_GET['numero']);
    tablas(3);
    tablas(15);
    tablas(56);
}else{
    echo "No hay numero para sacar la tabla";
}
*/
// Tablas de multiplicar del 1 al 10;
/*for($i = 0; $i <= 10; $i++){
    tablas($i);
}
*/
// Ejemplo 3:

function calculadora($numero1, $numero2){
    // Conjunto de instrucciones a ejecutar.
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;


    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicación: $multi <br/>";
    echo "Division: $division <br/>";
    echo "<hr/>";
}

calculadora(10, 30);
calculadora(20, 30);
calculadora(30, 30);
calculadora(40, 30);
