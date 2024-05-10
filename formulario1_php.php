<?php
// Paso 2: Procesar el formulario en PHP. Comprobar si el formulario ha sido enviado via método POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paso 3: Si ha sido enviado, obtener el nombre, email, pregunta del usuario:
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pregunta = $_POST['pregunta']; {
        // Paso 4: Si es Alice o Bob, saludar:
        echo "El usuario se llama $nombre, su email es $email y su pregunta es: $pregunta";
    }
}
