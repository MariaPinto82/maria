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


// Ejemplo 1:
$color = "rojo";

if($color === "rojo"){
    echo "El color es el rojo";
}else{
    echo "Es otro color";
};
echo "<hr>";

// Ejemplo 2:
$year = 2021;

if($year == 2021){
    echo "Estamos en el 2021";
}else{
    echo "No estamos en la epoca";
};
echo "<hr>";

// Ejemplo 3: 
$edad = 38;
$mayoriaEdad = 18;
$cuidad = "La Coruña";
$continente = "Europa";
$nombre = "David Gomez";

if($edad >= $mayoriaEdad){
    echo "<h3>$nombre es mayor de edad </h3>";

    if($continente == "Europa"){
        echo "<h3>y es de $cuidad </h3>";
    }else{
        echo "<h3>No es de Europa </h3>";
    }
    
}else{
    echo "<h3>$nombre es menor de edad </h3>";
}

// Ejemplo 4:
$dia = 5;

if($dia == 1){
    echo "Es lunes";
}else{
    if($dia == 2){
        echo "Es martes";
    }else{
        if($dia == 3){
            echo "Es miercoles";
        }else{
            if($dia == 4){
                echo "Es jueves";
            }else{
                if($dia == 5){
                    echo "Es viernes";
                }else{
                    if($dia == 6){
                        echo "Es fin de semana";
                    }
                }
            }
        }
    }
}