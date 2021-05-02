/**
 * Objeto con las propiedades de la calculadora
 */

let p = {
    teclas: document.querySelectorAll("#calculadora ul li"),
    accion: null,
    digito: null,
    operaciones: document.querySelector("#operaciones")
}




/**
 * Objeto con los metodos de la calculadora
 */

let m = {
    inicio: function() {
        for (let i = 0; i < p.teclas.length; i++) {
            console.log("i", i)
            p.teclas[i].addEventListener("click", m.pulsar)
        }
    },
    pulsar: function(e) {
        p.accion = e.target.getAttribute("class");
        p.digito = e.target.innerHTML;
        console.log("p.digito", p.digito)
        m.calculadora(p.accion, p.digito);
    },
    calculadora: function(accion, digito) {
        switch (accion) {
            case "numero":
                if (p.operaciones.innerHTML == 0) {
                    p.operaciones.innerHTML = digito;
                } else {
                    p.operaciones.innerHTML += digito;
                }
                break;


            case "signo":
                console.log("signo");
                break;

            case "decimal":
                console.log("decimal");
                break;


            case "igual":
                console.log("igual");
                break;

        }
    }
}

m.inicio();