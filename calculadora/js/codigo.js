'use strict';
let p = {
    teclas: document.querySelectorAll("#calculadora ul li")
}

let m = {
    inicio: function() {
        for (let i = 0; i < p.teclas.length; i++) {
            p.teclas[i].addEventListener("click", m.oprimirTecla)
        }
    },
    oprimirTecla: function() {
        console.log("hola")
    }
}
m.inicio();