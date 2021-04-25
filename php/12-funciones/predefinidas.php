<?php
// Funciones predefinidas

/** Debugear **/
$nombre = "maria";
var_dump($nombre);  

echo "<hr/>";

/** Fechas **/
echo date('d-M-y');

echo "<hr/>";
echo time();  // Saca la fecha en formato unix.

echo "<hr/>";
/** Matematicas **/
echo "Raiz cuadrada de 10: ".sqrt(10);

echo "<hr/>";

echo "Numero aleatorio entre el 10 y el 40: ".rand(10, 40);

echo "<hr/>";

echo "Numero pi: ".pi();

echo "<hr/>";

echo "Redondear: ".round(7.891234, 2);

echo "<hr/>";


/********************************************************************************************************************** */
// Más funciones generales:
gettype($nombre);

// Detectar tipado
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<hr/>";

if(is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}

// Comprobar si existe una variable
if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}


echo "<hr/>";
// Limpiar espacios
$frase = "     mi contenido   ";
var_dump(trim($frase));  // Limpia los espacios que no son necesarios
echo $frase;

// Eliminar variables / indices de arrays
echo "<hr/>";
$year = 2012;
unset($year);

var_dump($year);

// Comprobar si una variable esta vacia
echo "<hr/>";
$texto = "hola";
if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable tiene contenido";
}

// Contar caracteres de un string
echo "<hr/>";
$cadena = "12345";
echo strlen($cadena);

// Encontrar en un string un caracter, una palabra...
echo "<hr/>";
$frase = "La vida es bella";
echo strpos($frase, "i");
echo "<br/>";
// Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);

echo $frase;
echo "<br/>";
// Mayusculas y Minisculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);