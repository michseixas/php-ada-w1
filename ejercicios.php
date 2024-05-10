<!DOCTYPE html>
<html>

<head>
    <title>Mi primer saludo en PHP</title>
</head>

<body>
    <h1>Formulario de contacto</h1>
    <!--Paso 1: implementar el Form que utiliza el metodo POST para enviar los datos -->
    <!-- $_SERVER["PHP_SELF"] es una variable superglobal que hace referencia al script PHP actual. -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        ¿Cómo te llamas?:
        <input type="text" name="nombre">
        <input type="submit" name="submit" value="Enviar Nombre">
    </form>

    <?php
    // Paso 2: Procesar el formulario en PHP. Comprobar si el formulario ha sido enviado via método POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Paso 3: Si ha sido enviado, obtener el nombre del usuario y verificar si es Alice o Bob:
        $nombre = $_POST['nombre'];
        if ($nombre == "Alice" || $nombre == "Bob") {
            // Paso 4: Si es Alice o Bob, saludar:
            echo "¡Hola, $nombre!";
        } else {
            //Si no es Alice ni Bob:
            echo "Solo Alice y Bob pueden llenar este formulario";
        }
    }
    ?>
</body>

</html>