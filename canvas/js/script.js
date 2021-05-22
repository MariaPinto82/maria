let contenedor = document.querySelector("#contenedor")
let ampliarLienzo = document.querySelector("#lienzo")


function ampliar() {

    contenedor.style.width = "100%";
    contenedor.style.height = "100vh";
    contenedor.style.margin = "0";


    ampliarLienzo.style.width = "100%";
    ampliarLienzo.style.height = "100vh";
    ampliarLienzo.style.backgroundSize = "cover";
    ampliarLienzo.style.backgroundRepeat = "no-repeat";
}