<?php
// Paso 2: Procesar el formulario en PHP. Comprobar si el formulario ha sido enviado via método POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paso 3: Si ha sido enviado, obtener las respuestas usuario:
    $precio = $_POST['precio'];
    $personas = $_POST['personas'];
    $ciudad = $_POST['ciudad']; 
    $wifi = $_POST['wifi']; {
        // Paso 4: abrir en otra pagina los datos recibidos:
        echo "<div><h3>Datos de la reserva:<h3></div>";
        echo "<div>Precio total: € $precio</div>";
        echo "<div>Número de personas: $personas</div>";
        echo "<div>Ciudad: $ciudad</div>";
        echo "Wifi: $wifi";
    }
}
