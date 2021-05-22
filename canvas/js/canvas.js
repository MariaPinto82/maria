let canvas = document.querySelector("#lienzo");
let ctx = canvas.getContext('2d');
let alfa = 1;

// Cielo
let grd = ctx.createLinearGradient(0, 0, 0, 500);
grd.addColorStop(0, "rgba(0,0,225," + alfa + ")");
grd.addColorStop(1, "white");
ctx.fillStyle = grd;
ctx.fillRect(0, 0, 1000, 500);


// Oceano
let grd2 = ctx.createLinearGradient(0, 400, 0, 500);
grd2.addColorStop(0, "rgba(0,180,225," + alfa + ")");
grd2.addColorStop(1, "white");
ctx.fillStyle = grd2;
ctx.fillRect(0, 400, 1000, 100);