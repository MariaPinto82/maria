<?php
/**
 * Bucle While: 
 *  El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas,
 * tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle,
 * por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá 
 * hasta el final de la iteración (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración).
 *  A veces, si la expresión while se evalúa como false desde el principio, las sentencias anidadas no se ejecutarán ni 
 * siquiera una vez.
 */

/**
 * Estructura del bucle while:
 * 
 *    while(condicion){
 *        bloque de instrucciones;
 *        otras instrucciones;
 * }
 * 
 */

$numero = 0;

while($numero <= 100){
    echo $numero ;
    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

// Ejemplos con while:
