<?php
/**
 * Bucles For:
 * Los bucles for son los más complejos en PHP. Se comportan como sus hoomologos en C. La sintaxis de un bulce for es:
 * 
 * for(expr1, expr2, expr3)
 * sentencia;
 * 
 * La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo de un bucle.
 * 
 * En el comienzo de cada iteración, se evalúa expr2. Si se evalua como true, el bucle continua y se ejecutan la/sy sentencia/s
 * anidada/s. Si se evalua como false, finaliza la ejecucion del bucle.
 * 
 * Al final de cada iteración, se evalua (ejecuta) expr3.
 * 
 * Cada una de las expresiones puede estar vacia o contener multiples expresiones separadas por comas. En expr2, todas las expresiones
 * separadas por una coma son evaluadas, pero el resultado se toma de la ultima parte. Que expr2 este vacia significa que el bucle
 * deberia ser corrido indefinidamente (PHP implicitamente lo considera true, como en C). Esto puede no ser tan util como se pudiera
 * pensar, ya que muchas veces se debe terminar el bucle usando una sentencia condicional BREAK en lugar de utilizar la expresion verdadera
 * del FOR.
 */
/**
 * Sintaxis del bucle For:
 * 
 * for(variable contador, condicion, actualizando contador){
 *      // Bloque de instrucciones
 * }
 */

/*$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}


echo "<h1>El resultado es: $resultado</h1>";
*/

// Tabla de multiplicar con el bucle for;
if(isset($_GET['numero'])){
    $numero = (int) $_GET['numero'];   // Cambiar tipo de dato;
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}