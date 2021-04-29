'use strict';
/*======================================================================================================================
                                Intervalos y Retardos de Tiempo
=======================================================================================================================*/

let tiempo = document.querySelector("#tiempo");
let segundos = 0;

/*======================================================================================================================
                                                setInterval(intervalo de tiempo)
                                                Intervalos de Tiempo (setInterval(funcion, tiempo))
=======================================================================================================================*/

let intervalo = setInterval(function(){
    
    segundos++;
    tiempo.innerHTML = segundos;
    console.log("segundos", segundos)
},1000)


/*======================================================================================================================
                                                SET TIMEOUT (retardo de tiempo)
                                                setTimeout(funcion, tiempo)
=======================================================================================================================*/

setTimeout(function(){
    //alert("se cumplio el tiempo")
    clearInterval(intervalo)  // Se detiene el setInterval
}, 5000)

