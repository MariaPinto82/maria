/*=============================================
OBJETO CON LAS PROPIEDADES DEL SLIDE
=============================================*/

let p = {

    paginacion: document.querySelectorAll("#paginacion li"),
    item: 0,
    cajaSlide: document.querySelector("#slide ul"),
    animacionSilde: "slide",
    imgSlide: document.querySelectorAll("#slide ul li"),
    avanzar: document.querySelector("#slide #avanzar"),
    retroceder: document.querySelector("#slide #retroceder")

}

/*=============================================
OBJETO CON LOS MÉTODOS DEL SLIDE
=============================================*/

let m = {

    inicioSlide: function() {

        for (let i = 0; i < p.paginacion.length; i++) {

            p.paginacion[i].addEventListener("click", m.paginacionSlide)

        }

        p.avanzar.addEventListener("click", m.avanzar);

        p.retroceder.addEventListener("click", m.retroceder);

    },

    paginacionSlide: function(item) {


        p.item = item.target.parentNode.getAttribute("item") - 1;

        m.movimientoSlide(p.item);

    },

    avanzar: function() {

        if (p.item == p.imgSlide.length - 1) {

            p.item = 0;

        } else {

            p.item++;
        }

        m.movimientoSlide(p.item);
    },


    retroceder: function() {

        if (p.item == 0) {

            p.item = p.imgSlide.length - 1;

        } else {

            p.item--;
        }

        m.movimientoSlide(p.item);
    },

    movimientoSlide: function(item) {

        p.cajaSlide.style.left = item * -100 + "%";

        for (let i = 0; i < p.paginacion.length; i++) {

            p.paginacion[i].style.opacity = .5;

        }

        p.paginacion[item].style.opacity = 1;

        if (p.animacionSilde == "slide") {

            p.cajaSlide.style.transition = ".7s left ease-in-out";

        }

        if (p.animacionSilde == "fade") {

            p.imgSlide[item].style.opacity = 0;

            p.imgSlide[item].style.transition = ".7s opacity ease-in-out";

            setTimeout(function() {

                p.imgSlide[item].style.opacity = 1;

            }, 500)

        }

    }

}

m.inicioSlide();