'use strict';

/*======================================================================================================================
                                        Condiciones
=======================================================================================================================*/
let a = 5;
let b = 10;

if (a > b) {
    console.log("a es mayor que b")
} else if (a == b) {
    console.log("a es igual que b")
} else {
    console.log("a es menor que b")
}


/*======================================================================================================================
                                        Cambios
=======================================================================================================================*/

let dia = "Jueves";

switch (dia) {
    case "Lunes":
        console.log("Es lunes");
        break;

    case "Martes":
        console.log("es martes");
        break;
    case "Miercoles":
        console.log("es miercoles");
        break;
    case "Jueves":
        console.log("es jueves");
        break;
    case "viernes":
        console.log("es viernes");
        break;
    default: console.log("es fin de semana");
}

