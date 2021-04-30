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
    intervalo: setInterval(function () {



        a.A = Math.ceil(Math.random() * 4);
        a.B = Math.ceil(Math.random() * 4);
        a.C = Math.ceil(Math.random() * 4);
        a.D = Math.ceil(Math.random() * 4);

        if (a.resultado()) {
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

-El caballo de Mac es más oscuro que el de Smith, pero más rapido y más viejo que el de Jack,
que es aun más lento que el de Willy, que es màs joven que el de Mac, que es màs viejo que el
de Smith, que es más claro que el de Willy, aunque el de Jack es más lento y más oscuro que el
de Smith. ¿Cual es el más viejo, cual el más lento y cual el más claro?

Mac | edad : viejo (2) | velocidad: rapido (2) | color: oscuro (2);
Smith | edad : joven (1) | velocidad: rapido(2) | color: claro (1);
Jack | edad : joven (1) | velocidad: lento (1) | color: oscuro (2);
Willy | edad : joven (1) | velocidad: rapido (2) | color: oscuro (2);
=====================================================================================================================*/


let b = {
    Mac: { edad: 0, velocidad: 0, color: 0 },
    Smith: { edad: 0, velocidad: 0, color: 0 },
    Jack: { edad: 0, velocidad: 0, color: 0 },
    Willy: { edad: 0, velocidad: 0, color: 0 },
    resultado: function () {
        if (b.Mac.color > b.Smith.color &&
            b.Mac.velocidad > b.Jack.velocidad &&
            b.Mac.edad > b.Jack.edad &&
            b.Willy.velocidad > b.Jack.velocidad &&
            b.Mac.edad > b.Willy.edad &&
            b.Mac.edad > b.Smith.edad &&
            b.Willy.color > b.Smith.color &&
            b.Smith.velocidad > b.Jack.velocidad &&
            b.Jack.color > b.Smith.color
            ){
                return true;
            }
            return false;
    },
    intervalo: setInterval(function(){
        b.Mac.edad = Math.ceil(Math.random()*2);
        b.Mac.velocidad = Math.ceil(Math.random()*2);
        b.Mac.color = Math.ceil(Math.random()*2);

        b.Smith.edad = Math.ceil(Math.random()*2);
        b.Smith.velocidad = Math.ceil(Math.random()*2);
        b.Smith.color = Math.ceil(Math.random()*2);

        b.Jack.edad = Math.ceil(Math.random()*2);
        b.Jack.velocidad = Math.ceil(Math.random()*2);
        b.Jack.color = Math.ceil(Math.random()*2);

        b.Willy.edad = Math.ceil(Math.random()*2);
        b.Willy.velocidad = Math.ceil(Math.random()*2);
        b.Willy.color = Math.ceil(Math.random()*2);
        if(b.resultado()){
            clearInterval(b.intervalo);
            console.log("Caballo de Mac", b.Mac);
            console.log("Caballo de Smith", b.Smith);
            console.log("Caballo de Jack", b.Jack);
            console.log("Caballo de Willy", b.Willy);
        }
    }, 10)
}








