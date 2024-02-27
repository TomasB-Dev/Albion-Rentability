/**
 * The JavaScript code toggles a dark mode feature on a webpage and saves the user's preference in
 * local storage.
 * @param modoOscuroActivado - `modoOscuroActivado` is a boolean variable that indicates whether the
 * dark mode is currently activated or not. It is used to determine the state of the dark mode and
 * update the button icon accordingly.
 */
document.addEventListener('DOMContentLoaded', function () {
    var modoOscuroBtn = document.getElementById('modoOscuroBtn');

    modoOscuroBtn.addEventListener('click', function () {
        document.body.classList.toggle('modo-oscuro');
        var modoOscuroActivado = document.body.classList.contains('modo-oscuro');
        localStorage.setItem('modoOscuro', modoOscuroActivado ? 'activado' : 'desactivado');
        actualizarIconoBoton(modoOscuroActivado);
    });

    // Verifica el estado del modo oscuro al cargar la página
    if (localStorage.getItem('modoOscuro') === 'activado') {
        document.body.classList.add('modo-oscuro');
        actualizarIconoBoton(true);
    }
});

function actualizarIconoBoton(modoOscuroActivado) {
    var modoOscuroBtn = document.getElementById('modoOscuroBtn');
    // Cambia la clase del botón según el estado del modo oscuro
    modoOscuroBtn.className = modoOscuroActivado ? 'modo-oscuro' : '';
}
