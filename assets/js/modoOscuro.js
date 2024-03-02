/**
 * The JavaScript code toggles a dark mode feature on a webpage and saves the user's preference in
 * local storage.
 * @param modoOscuroActivado - `modoOscuroActivado` is a boolean variable that indicates whether the
 * dark mode is currently activated or not. It is used to determine the state of the dark mode and
 * update the button icon accordingly.
 */
document.addEventListener('DOMContentLoaded', function () {
    var modoOscuroBtn = document.getElementById('modoOscuroBtn');
    var iconoModoOscuro = document.getElementById('iconoModoOscuro');

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
    var iconoModoOscuro = document.getElementById('iconoModoOscuro');

    // Cambia el ícono según el estado del modo oscuro
    if (modoOscuroActivado) {
        // Modo oscuro activado, cambia el ícono a un sol blanco
        iconoModoOscuro.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>';
    } else {
        // Modo oscuro desactivado, cambia el ícono a una luna
        iconoModoOscuro.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path></svg>';
    }

    // Cambia la clase del botón según el estado del modo oscuro
    modoOscuroBtn.className = modoOscuroActivado ? 'modo-oscuro' : '';
}
