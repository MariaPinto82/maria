'use strict';
/*====================================================================================================================
Clases:
-Las clases, son funciones constructoras y siempre las vamos a iniciar con Mayuscula.
-Ejemplo: new String()
=====================================================================================================================*/

/*====================================================================================================================
                                            Clases Primitivas
=====================================================================================================================*/

let string = new String("Esto es un string");
console.log("string", string)

/*====================================================================================================================
                                            Clase Number
=====================================================================================================================*/

let number = new Number(14);
console.log("number", number);

/*====================================================================================================================
                                            Clase Boolean
=====================================================================================================================*/

let boolean = new Boolean(false);
console.log("boolean", boolean);

/*====================================================================================================================
                                            Clase Compuestas
=====================================================================================================================*/

// Clase Array
let array = new Array('maria', 'pepe', 'rosa');
console.log("array", array);


/*====================================================================================================================
                                            Clase Object
=====================================================================================================================*/
let object = new Object({
    nombre: "maria", 
    apellidos: "pinto",
    edad: 38
});

console.log("object", object);

/*====================================================================================================================
                                            Clase Creadas por el/la Programador/a
=====================================================================================================================*/

// Creamos el prototipo 
function Persona(){

    // Porpiedades publicas
    this.nombre;
    this.edad;

}

let yo = new Persona();
yo.nombre = "maria";
yo.edad = "38 años";
console.log(yo);


/*====================================================================================================================
                                            Clase Con Parametros
=====================================================================================================================*/

function Animales(nombre, raza){

    // Propiedades Publicas
    this.nombre = nombre;
    this.raza = raza;
}

let mascota = new Animales("perro", "pitbull");

console.log("mascota", mascota);