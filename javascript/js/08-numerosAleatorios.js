'use strict';

/*======================================================================================================================
                                                Numeros Aleatorios
=======================================================================================================================*/

const numerosAleatorios = document.querySelector("#numeroAleatorio");
let numero = 0;

/*======================================================================================================================
Math: El objeto Math permite realizar tareas matematicas en los numeros.
Math.random: devuelve un numero aleatorio entre 0 (inclusive), y 1 (exclusivo)
=======================================================================================================================*/

numero = Math.random()*100;
numerosAleatorios.innerHTML = numero;


/*======================================================================================================================
Math.floor:Redondea al numero menor del decimal
=======================================================================================================================*/

numero = Math.floor(Math.random()*100);
numerosAleatorios.innerHTML = numero;


/*======================================================================================================================
Math.ceil: Redondea al numero mayor del decimal
=======================================================================================================================*/

numero = Math.ceil(Math.random()*100);
numerosAleatorios.innerHTML = numero;


/*======================================================================================================================
Math.round: Devuelve el valor de x redondeado a su numeri entero mas proximo
=======================================================================================================================*/

numero = Math.round(Math.random()*10);
numerosAleatorios.innerHTML = numero;