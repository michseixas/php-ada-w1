<?php

//ejecutar ejercicio en la consola
$nombre = readline('Ingrese su nombre: ');


if ($nombre == "Alice"|| $nombre == "Bob" ) {
    // Mostrar el saludo
    echo "¡Hola, $nombre!";
    } else {
    echo "Solo Alice y Bob pueden llenar este formulario";
}

?>