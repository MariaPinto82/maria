<?php
/**
 * Ejercicio 4: Recoge dos numeros por la url (parametro GET) y hacer las
 * operaciones basicas de una calculadora (sumar, restar, multiplicar y dividir)
 * de esos dos numeros;
 */



if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "<h1>Calculadora basica</h1>";
    echo "Suma: ".($numero1+$numero2)." <br/>";
    echo "Resta: ".($numero1-$numero2)." <br/>";
    echo "Multiplicacion: ".($numero1*$numero2)." <br/>";
    echo "Division: ".($numero1/$numero2)." <br/>";
}else{
    echo "<h1>Introduce correctamente los valores por la url</h1>";
}



