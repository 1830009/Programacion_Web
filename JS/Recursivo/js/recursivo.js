function factorial() {
    let numero = document.getElementById("numfac").value;
    document.getElementById("res").value = facrec(numero);
}

function facrec(n) {
    if (n == 0)
        return 1;
    else
        return n * facrec(n - 1);

}

function Potencia() {
    let num = document.getElementById("numexp").value;
    let valor = num.split('^');
    num = valor[0];
    exp = valor[1];
    document.getElementById("resexp").value = potrec(num, exp);
}

function potrec(n, e) {
    if (e == 0)
        return 1;
    else
        return n * (potrec(n, e - 1));
}