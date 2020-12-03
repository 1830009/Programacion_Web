function tabla() {
    let tbl = document.getElementById("tbl_res");
    tbl.innerHTML = "";
    n = parseInt(document.getElementById("tabla").value);
    res = parseInt(document.getElementById("resultados").value);

    if (n < 1 || n > 50) {
        document.getElementById("error_tabla").innerHTML = "Error Valor Fuera de Rango (Validos: 1-50)";
    } else {
        if (res < 1 || res > 20) {
            document.getElementById("error_resultados").innerHTML = "Error Valor Fuera de Rango (Validos: 1-20)";
        } else {
            document.getElementById("error_resultados").innerHTML = "";
            document.getElementById("error_tabla").innerHTML = "";
            //  let tbl_new = document.createElement('table');
            for (let i = 0; i < res; i++) {
                let columna = document.createElement('tr');
                let f1 = document.createElement('td');
                let f2 = document.createElement('td');
                let f3 = document.createElement('td');

                f1.setAttribute('style', 'color: green');
                f3.setAttribute('style', 'color: red');
                f1.innerHTML = n;
                f2.innerHTML = (' X ' + (i + 1) + ' = ');
                f3.innerHTML = (n * (i + 1));

                columna.appendChild(f1);
                columna.appendChild(f2);
                columna.appendChild(f3);

                tbl.appendChild(columna);
            }
        }
    }
}