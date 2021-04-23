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

/**
 * Operadores logicos:
 * && (and);
 * || (or);
 * !  (not);
 */



// Ejemplo 1:
$color = "rojo";

if ($color === "rojo") {
    echo "El color es el rojo";
} else {
    echo "Es otro color";
};
echo "<hr>";

// Ejemplo 2:
$year = 2021;

if ($year == 2021) {
    echo "Estamos en el 2021";
} else {
    echo "No estamos en la epoca";
};
echo "<hr>";

// Ejemplo 3: 
$edad = 38;
$mayoriaEdad = 18;
$cuidad = "La Coruña";
$continente = "Europa";
$nombre = "David Gomez";

if ($edad >= $mayoriaEdad) {
    echo "<h3>$nombre es mayor de edad </h3>";

    if ($continente == "Europa") {
        echo "<h3>y es de $cuidad </h3>";
    } else {
        echo "<h3>No es de Europa </h3>";
    }
} else {
    echo "<h3>$nombre es menor de edad </h3>";
}

echo "<hr>";
// Ejemplo 4: no se deberia hacer así, solo es un ejemplo para enseñar...
$dia = 7;

if ($dia == 1) {
    echo "Es lunes";
} else {
    if ($dia == 2) {
        echo "Es martes";
    } else {
        if ($dia == 3) {
            echo "Es miercoles";
        } else {
            if ($dia == 4) {
                echo "Es jueves";
            } else {
                if ($dia == 5) {
                    echo "Es viernes";
                } else {
                    echo "Es fin de semana";
                }
            }
        }
    }
};
echo "<hr>";

// Ejemplo 5:  // Así si deberia hacerse...para obtener una buena practica en programación;
$day = 4;

if ($day == 1) {
    echo "lunes";
} elseif ($day == 2) {
    echo "martes";
} elseif ($day == 3) {
    echo "miercoles";
} elseif ($day == 4) {
    echo "jueves";
} elseif ($day == 5) {
    echo "miercoles";
} else {
    echo "fin de semana";
};

echo "<hr>";
// Ejemplo 6:
$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo "Esta en edad de trabajar";
} else {
    echo "No esta en edad de trabajar";
}

echo "<hr>";
// Ejemplo 7: si una se cumple, se dara como true
$pais = "Mexico";
if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "No se habla español";
}

echo "<hr>";
// SWITCH:
$dia1 = 4;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miercoles";
        break;

    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;
    
    default:
        echo "Es fin de semana";
}

echo "<hr>";
// Goto:
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
echo "<h3>Instruccion 5</h3>";
echo "<h3>Instruccion 6</h3>";

marca:
echo "Me he saltado 5 echos";