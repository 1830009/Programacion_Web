var btnVCargar = document.getElementById('cargar');

function cargarContenidoAjax() {
    //btnVCargar= ;
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "server.php", true);
    xhr.onreadystatechange = function() {
        console.log(xhr.readyState);
        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            var contenido = document.getElementById('contenido');
            contenido.innerHTML = json.nombre;
        }
    }
    xhr.send();
}

btnVCargar.addEventListener('click', cargarContenidoAjax);