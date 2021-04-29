'use strict';
/*====================================================================================================================
Caso 1: Los Cuatro Atletas

-De cuatro corredores de atletismo se sabe que C ha llegado inmediatamente detreas de B,
y D ha llegado en medio de A y C. ¿Podria usted calcular el orden de llegada?
=====================================================================================================================*/

let a = {
    A: 0,
    B: 0,
    C: 0,
    D: 0,
    resultado: function () {


        if (a.C > a.B &&
            a.D > a.B &&
            a.D > a.C &&
            a.D < a.A) {

                return true;
            }

            return false;
    },
    intervalo: setInterval(function(){



        a.A = Math.ceil(Math.random()*4);
        a.B = Math.ceil(Math.random()*4);
        a.C = Math.ceil(Math.random()*4);
        a.D = Math.ceil(Math.random()*4);

        if(a.resultado()){
            clearInterval(a.intervalo);
            console.log("atleta A", a.A);
            console.log("atleta B", a.B);
            console.log("atleta C", a.C);
            console.log("atleta D", a.D);
        }


    }, 10)

}





/*====================================================================================================================
Caso 2: Caballos

-El caballo de Mac es mas oscuro que el de smith, pero mas rapido y mas viejo que el de Jack,
que es aun mas lento que el de Willy, que es mas joven que el de Mac, que es mas viejo que el
de Smith, que es mas claro que el de Willy, aunque el de Jack es mas lento y mas oscuro que el
de Smith. ¿Cual es el mas viejo, cual el mas lento y cual el mas claro?
=====================================================================================================================*/





/*====================================================================================================================
Caso 3: Los Cuatro Perros

-Tenemos cuatro perros: un glago, un dogo, un alano y un podenco. Este ultimo come mas que el galgo;
el alano como mas que el galgo y menos que el dogo, pero este come mas que el podenco. ¿Cual de los
cuatro perros come menos?
=====================================================================================================================*/




