function IMC() {
    let peso = document.getElementById("peso").value;
    let altura = document.getElementById("altura").value;
    let imc = parseFloat(peso) / (altura * altura);
    let Limc = document.getElementById("limc");
    //Redondear a 2 Decimales
    imc *= 100;
    imc = Math.round(imc) / 100;

    document.getElementById("resIMC").innerHTML = imc;
    document.getElementById("resCAT").innerHTML = condicion(imc);
    //Limc.innerText += ('   ' + imc + '  \n  Categoria: ' + condicion(imc));
    // document.write('<br><br> <label> IMC:</label> <input type="text" value="' + imc + '">');
}

function condicion(imc) {
    if (imc < 0 || imc > 100)
        return ' Valor Fuera de rango';

    if (imc > 0 && imc < 15)
        return ' Delgadez Extrema';
    else
    if (imc >= 15 && imc < 16)
        return ' Delgadez severa';
    else
    if (imc >= 16 && imc < 18.5) {
        document.getElementById("estado").src = "img/normal.png";
        return ' Delgadez';
    } else
    if (imc >= 18.5 && imc < 25) {
        document.getElementById("estado").src = "img/normal.png";
        return ' Peso saludable';
    } else
    if (imc >= 25 && imc < 30) {
        document.getElementById("estado").src = "img/sobrepeso.png";
        return '  Sobrepeso';
    } else
    if (imc >= 30 && imc < 35) {
        document.getElementById("estado").src = "img/sobrepeso.png";
        return ' Obesidad severa';
    } else
    if (imc >= 35) {
        document.getElementById("estado").src = "img/sobrepeso.png";
        return ' Obesidad mórbida';
    }

}