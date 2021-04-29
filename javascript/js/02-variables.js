'use strict';
// Variables Numericas
let numero = 5;
console.log("numero:", numero);


// Variables de Texto
let palabra = "hola";
console.log("palabra:", palabra);

// Variables Booleanas

const booleana = true;
console.log("booleana:", booleana);

// Variables de tipo Array
let colores = ["rojo", "amarillo", "azul"];
console.log("colores:", colores[0]);

// Variables de tipo objeto
let zumo = {
    "ingrediente1": "fressa",
    "ingrediente2": "mandarina",
    "ingrediente3": "banana"
}

console.log("zumo:", zumo.ingrediente1);


// Variables DOM('Modelo de Objetos del Documento')
/**
 * El DOM es la estructura de objetos que genera el navegador cuando se carga un documento
 * y se puede alterar mediante Javascript para cambiar dinamicamente los contenidos y aspecto
 * de la pagina.
 */

let cajon = document.querySelector('#cajon');  // Seleccion por id (#cajon)
console.log("cajon:", cajon)


let cajas = document.querySelectorAll('.cajas'); // Seleccion por clase (.cajas)
console.log("cajas:", cajas)

