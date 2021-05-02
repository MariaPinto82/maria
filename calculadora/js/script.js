/**
 * Objeto con las propiedades de la calculadora
 */

let p = {
    teclas: document.querySelectorAll("#calculadora ul li"),
    accion: null,
    digito: null,
    operaciones: document.querySelector("#operaciones"),
    cantidadSignos: 0,
    cantidadDecimal: false,
    resultado: false


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
                p.cantidadSignos = 0;
                if (p.operaciones.innerHTML == 0) {
                    p.operaciones.innerHTML = digito;
                } else {
                    if (p.resultado) {
                        p.resultado = false;
                        p.operaciones.innerHTML = digito;

                    } else {
                        p.operaciones.innerHTML += digito;
                    }

                }
                break;


            case "signo":
                p.cantidadSignos++

                    if (p.cantidadSignos == 1) {
                        if (p.operaciones.innerHTML == 0) {
                            p.operaciones.innerHTML = 0
                        } else {
                            p.operaciones.innerHTML += digito;
                            p.cantidadDecimal = false;
                            p.resultado = false;
                        }

                    }

                break;

            case "decimal":
                if (!p.cantidadDecimal) {
                    p.operaciones.innerHTML += digito;
                    p.cantidadDecimal = true;
                }
                break;


            case "igual":
                p.operaciones.innerHTML = eval(p.operaciones.innerHTML);
                p.resultado = true;

                break;

        }
        console.log("p.resultado", p.resultado)
    },
    borrarCalculadora: function() {
        p.operaciones.innerHTML = 0;

    }
}

m.inicio();