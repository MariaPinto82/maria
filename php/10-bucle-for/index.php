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