'use strict';

/*====================================================================================================================
                        Objetos: Es una coleccion de propiedades y métodos 
=====================================================================================================================*/

let object = {

    // Una propiedad es una asociación entre un nombre y un valor.
    nombre: "maria",
    edad: 38,
    // El método es una función dentro de un objeto.
    descripcion: function(){
        console.log("Su nombre es "+object.nombre+" y tiene "+object.edad+" años.");
    }


}
console.log(object.nombre);
object.descripcion();   // Aqui llamamos al método