<?php
/**
 * Operadores aritmeticos:
 * Suma : $a + $b;
 * Resta: $a - $b;
 * Multiplicación: $a * $b;
 * División: $a / $b;
 * Resto o Modulo: $a % $b;
 */



$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1 + $numero2);
echo "<hr>";
echo 'Resta: '.($numero1 - $numero2);
echo "<hr>";
echo 'Multiplicación: '.($numero1 * $numero2);
echo "<hr>";
echo 'División: '.($numero1 / $numero2);
echo "<hr>";
echo 'Resto: '.($numero1 % $numero2);
echo "<hr>";



/**
 * Operadores de Incremento y Decremento;
 * Pre-incremento: ++$a;
 * Post-incremento: $a++;
 * Pre-decremento: --$a;
 * Post-decremento: $a--;
 */

$year = 2019;

$year++;
$year--;
++$year;
--$year;
echo "<h1>$year</h1>";


/**
 * Operadores de asignación:
 * = : $a = $b (asigna el valor de la variable $b a la variable $a);
 * += : $a += $b (Asigna el valor de la suma de las variables $a y $b a la variable $a. Equivale a, $a = $a+$b);
 * -= : $a -= $b (Asigna el valor de la resta de las variables $a y $b a la variable $a. Equivale a, $a = $a-$b);
 * *= : $a *= $b (Asigna el valor de la multiplicacion de las variables $a y $b a la variable $a. Equivale a, $a = $a*$b);
 * /= : $a /= $b (Asigna el valor de la division de las variables $a y $b a la variable $a. Equivale a, $a = $a = $a/$b);
 * %= : $a %= $b (Asigna el valor del módulo de la variable $a y $b a la variable $a. Equivale a, $a = $a%$b);
 * .= : $a .= $b (Asigna el valor de la concatenacion de las variables $a y $b a la variable $a. Equivale a, $a = $a . $b)
 */


$edad = 1234;

echo $edad."<br>";

echo ($edad+=5)."<br>"; 

echo ($edad-=5)."<br>";

echo ($edad*=5)."<br>";

echo ($edad/=5)."<br>";