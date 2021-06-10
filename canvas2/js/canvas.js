let canvas = document.querySelector("#lienzo");
let ctx = canvas.getContext("2d");

// Dibujar sprite
let sprite = new Image();
sprite.src = "img/opcion1.png";

sprite.onload = function() {

    //ctx.drawImage(imagen, ubicacionX, ubicacionY, recorteX, recorteY, x1, y1, x2, y2);
    ctx.drawImage(sprite, 0, 0, );
}