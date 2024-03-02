<?php
// Ruta a la carpeta "data"
$dataFolder = '../../data/';

// Asegurarse de que la carpeta "data" exista, si no, créala
if (!file_exists($dataFolder)) {
    mkdir($dataFolder, 0777, true);
}

// Nombre del archivo de contador
$contadorArchivo = $dataFolder . 'contador.txt';

// Inicializar el contador si el archivo no existe
if (!file_exists($contadorArchivo)) {
    $contador = 1;
    file_put_contents($contadorArchivo, $contador);
} else {
    // Leer el valor actual del contador desde el archivo
    $contador = file_get_contents($contadorArchivo);

    if ($contador === false) {
        // Manejar errores de lectura en el registro de errores
        error_log('Error al leer el contador en contador.php', 0);
        die('Error interno del servidor.');
    }

    // Incrementar el contador
    $contador++;

    // Escribir el nuevo valor del contador en el archivo
    if (!file_put_contents($contadorArchivo, $contador)) {
        // Manejar errores de escritura en el registro de errores
        error_log('Error al escribir el contador en contador.php', 0);
        die('Error interno del servidor.');
    }
}

// Devolver el valor del contador como respuesta
echo $contador;
?>