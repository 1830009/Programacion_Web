function Registrar() {
    if (validar()) {
        let confirmar = window.confirm("Presione sí para confirmar");
        if (confirmar == true) {
            window.alert("Dirección agregada correctamente");
            limpiartxt();
            window.location.replace("../../inicio.html");
        } else {

        }

    }
}

let id = ["inombre", "icp", "iestado", "imunicipio", "icolonia", "icalle", "inumExt"];
let idnum = ["icp", "inumInt", "inumExt"];

function limpiartxt() {
    for (let i = 0; i < id.length; i++) {
        document.getElementById(id[i]).value = "";
    }
}

function validar() {
    for (let i = 0; i < id.length; i++) {
        if (document.getElementById(id[i]).value == "") {
            window.alert("Debes escribir en los campos marcados con *");
            return false;
        }
    }
    return true;
}