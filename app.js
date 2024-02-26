function autocompletarItem() {
    var input = document.getElementById('itemInput');
    var sugerenciasDiv = document.createElement('div');
    sugerenciasDiv.setAttribute('id', 'sugerencias');

    var valorInput = input.value.toLowerCase();

    // Filtra los ítems que coinciden con el valor del input y no contienen '@+numero'
    var coincidencias = listaItems.filter(item => item.toLowerCase().includes(valorInput) && !/@\d+/.test(item));

    // Muestra las sugerencias
    coincidencias.forEach(function (sugerencia) {
        var opcionSugerida = document.createElement('p');
        opcionSugerida.textContent = sugerencia;
        opcionSugerida.onclick = function () {
            input.value = sugerencia;
            sugerenciasDiv.innerHTML = '';
        };

        sugerenciasDiv.appendChild(opcionSugerida);
    });

    // Muestra las sugerencias debajo del input
    input.parentNode.appendChild(sugerenciasDiv);
}

// Función para cargar el contenido del archivo .txt
    function leerArchivoTxt() {
        // Realiza una solicitud al servidor para obtener el contenido del archivo
        fetch('leerArchivo.php') // Ajusta la URL según tu entorno y ruta del archivo PHP
            .then(response => response.text())
            .then(data => {
                listaItems = obtenerNombresItemsDesdeTexto(data);
                console.log(listaItems);
            })
            .catch(error => console.error('Error al leer el archivo:', error));
    }
// Función para obtener los nombres de ítems desde el texto del archivo
function obtenerNombresItemsDesdeTexto(texto) {
    var lineas = texto.split('\n');
    var nombresItems = [];

    lineas.forEach(function (linea) {
        var partes = linea.split(':');
        if (partes.length >= 3) {
            var nombre = partes[2].trim(); // Toma el tercer elemento y quita espacios en blanco al principio y al final
            nombresItems.push(nombre);
        }
    });

    return nombresItems;
}

// Llama a la función al cargar la página
window.onload = leerArchivoTxt;