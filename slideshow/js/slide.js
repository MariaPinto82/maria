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

        m.movimientoSlide(p.item)
    },
    movimientoSlide: function(item) {
        p.cajaSlide.style.left = item * -100 + "%";
        for (let i = 0; i < p.paginacion.length; i++) {
            p.paginacion[i].style.opacity = .5;
        }
        p.paginacion[item].style.opacity = 1;
    }
}
m.inicioSLide();