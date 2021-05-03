/*==========================================================================================================================
                                        Objeto con las propiedades del SLIDE
===========================================================================================================================*/

let p = {
    paginacion: document.querySelectorAll("#paginacion li"),
    item: 0,
    cajaSlide: document.querySelector("#slide ul")
}







/*==========================================================================================================================
                                        Objeto con los métodos del SLIDE
===========================================================================================================================*/

let m = {
    inicioSLide: function() {
        for (let i = 0; i < p.paginacion.length; i++) {
            p.paginacion[i].addEventListener("click", m.paginacionSlide)
        }

    },
    paginacionSlide: function(item) {
        p.item = item.target.parentNode.getAttribute("item") - 1;

        m.movimientoSLide(p.item);
    },
    movimientoSLide: function(item) {
        p.cajaSlide.style.left = item * -100 + "%";
    }
}

m.inicioSLide();