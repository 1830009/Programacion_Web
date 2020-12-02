let id1 = 0;
let id2 = 0;
let aciertos = 0;
let c1 = 0;
let c2 = 0;
clic = 0;
let tiempo;
let sec = 60;
let numeros = [16];
let numrand = [16];


function reset() {
    for (let i = 0; i < 16; i++)
        numrand[i] = 0;

}

function carta(n) {
    let nx = numeros[n - 1];
    if (nx > 8)
        nx -= 8;
    document.getElementById(n).setAttribute("style", "background-image: url(img/" + nx + ".png");

    //document.getElementById(n).setAttribute("style", "background-image: url(img/" +  + ".png");

    if (clic == 0) {
        id1 = n;
        c1 = nx;
        /*if (n > 8)
            c1 = n - 8;
        else
            c1 = n;*/


        clic++;
        return;
    }

    if (clic == 1) {
        id2 = n;
        c2 = nx;
        /*if (n > 8)
            c2 = n - 8;
        else
            c2 = n;*/

        if (c1 == c2) {
            window.alert("Haz acertado, Excelente!!");
            aciertos++;
            c1 = c2 = clic = id1 = id2 = 0;
            document.getElementById("acierto").innerHTML = aciertos;
        } else
            window.setTimeout('ocultar()', 2000);


    }
}

function ocultar() {
    document.getElementById(id1).setAttribute("style", "background-image: url(../img/ naipe.png");
    document.getElementById(id2).setAttribute("style", "background-image: url(../img/ naipe.png");
    c1 = c2 = clic = id1 = id2 = 0;
}

function asignarCartas() {
    let x = 1;
    for (let i = 0; i < 15; i++) {
        numeros[i] = parseInt(Math.random() * (17 - 1) + 1);
        x = 1;
        if (i == 15)
            break;
        do {
            //window.alert(i);
            if (numrand[numeros[i] - 1] == 0) {
                numrand[numeros[i] - 1] = 1;
                x = 0;
                break;
            } else {
                numeros[i] = parseInt(Math.random() * (16 - 1) + 1);
            }
        } while (x == 1);
    }

    for (let y = 0; y < 16; y++) {
        if (numrand[y] == 0)
            numeros[15] = y + 1;
    }

    /*   for (let f = 0; f < 16; f++) {

           document.getElementById(f + 1).setAttribute('onclick', 'carta(' + numeros[f] + ')');
           document.getElementById(f + 1).setAttribute('id', numeros[f]);
       }*/
}

function iniciar() {
    reset();
    asignarCartas();
    clearInterval(tiempo);
    sec = 60;
    for (let i = 1; i <= 16; i++) {
        document.getElementById(i).setAttribute("style", "background-image: url(img/naipe.png");
        document.getElementById(i).setAttribute("style", "background-color: black");
    }

    tiempo = setInterval(f_tiempo, 1000);

}

function f_tiempo() {
    sec -= 1;
    if (sec >= 0) {
        document.getElementById("tiempo").innerHTML = (sec);
        if (sec < 11)
            document.getElementById("tiempo").setAttribute("style", "color:red");
    } else {
        clearInterval(tiempo);
        window.alert("¡¡EL TIEMPO SE ACABO!!");
    }
}