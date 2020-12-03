function tabla_din() {

    let numero = parseInt(document.getElementById('numero').value);
    let max = parseInt(document.getElementById('max').value);
    let res = document.getElementById('res');
    let i;
    let parrafo = document.createElement('p');

    for (i = 1; i <= max; i++) {
        texto = document.createTextNode(numero + " X " + i + " = " + (numero * i));

        parrafo.appendChild(texto);
        res.appendChild(parrafo);
    }
    //let text = document.createTextNode(texto);
}