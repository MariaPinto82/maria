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
}echo "<hr/>";

*/
// Tablas de multiplicar del 1 al 10;
/*for($i = 0; $i <= 10; $i++){
    tablas($i);
}
*/
// Ejemplo 3:

function calculadora($numero1, $numero2, $negrita = false){
    
    // Conjunto de instrucciones a ejecutar.
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadenaTexto = "";
    if($negrita){
        $cadenaTexto .= "<h1>";
    }

    $cadenaTexto .= "Suma: $suma <br/>";
    $cadenaTexto .="Resta: $resta <br/>";
    $cadenaTexto .="Multiplicación: $multi <br/>";
    $cadenaTexto .= "Division: $division <br/>";
    $cadenaTexto .= "<hr/>";

    if($negrita){
        echo "</h1>";
    }

    $cadenaTexto .= "<br/>";
    
    return $cadenaTexto;
}

echo calculadora(10, 30, true);


// Ejemplo 4: 

function getNombre($nombre){
    $texto = "El nombre es: $nombre"; 
    return $texto;
}
function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos"; 
    return $texto;
}


function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);


    return $texto;
};
echo devuelveElNombre("Maria", "Pinto Sabater");
echo "<hr/>";
echo getNombre("Lucia");
echo "<hr/>";
echo getApellidos("Martinez");