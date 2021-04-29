'use strict';

/*======================================================================================================================
                                        Funciones sin Parametros
=======================================================================================================================*/
let globales = 10;
console.log("globales", globales);
// Declaramos la funcion

function saludo(){
    // Tarea de la funcion
    console.log("hola")
}



// Ejecutamos la funcion

saludo();



/*======================================================================================================================
                                        Funciones con Parametros
=======================================================================================================================*/

// Declaramos la funcion
function operacion(digito1, digito2){
    let resultado = digito1 + digito2;
    globales = resultado;
    console.log("globales_operacion", globales);
    console.log("resultado", resultado);
}


// Ejecutamos la funcion
operacion(5, 7);  // Agregamos los dos parametros((5, 7) o (8, 10)(puedes meter el valor que quieras));

// Puedes llamar a la funcion las veces que quieras //
operacion(8, 17);
operacion(55, 77);
operacion(65, 72);



/*======================================================================================================================
                                        Funciones con Retorno Sin Parametros
=======================================================================================================================*/

// Declaramos la funcion
function retorno1(){
    let numero = 5;
    return numero;
}

// Ejecutamos la funcion
console.log(retorno1())


/*======================================================================================================================
                                        Funciones con Retorno con Parametros
=======================================================================================================================*/

// Declaramos la funcion
function retorno2(numero){
    return numero;
}


// Ejecutamos la funcion
console.log(retorno2(10));
