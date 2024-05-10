<!-- 2. FORMULARIO DE RESERVA DE HOTEL
Creen un formulario para reservar hoteles con los siguientes campos y tipos:

Precio por noche: Comprueba que es un número.
Numero de personas: Tiene que ser una lista de opciones entre 1 al 4
Ciudad: Tiene que ser una lista de opciones entre: Madrid, Barcelona, Valencia, Bilbao, Sevilla
Wifi: checkbox 

NOTA: 
- Todos los campos son requeridos 
- Los datos se mandan via POST
- Si todo es correcto, se debe ir a otra página a la original y mostrar lo que se envió -->


<!DOCTYPE html>
<html>

<head>
    <title>Formulario método post</title>
</head>

<body>
    <h1>Formulario de Reserva de Hotel</h1>
    <!--Paso 1: implementar el Form que utiliza el metodo POST para enviar los datos -->
    <!--En lugar de usar en action= echo $_SERVER["PHP_SELF"]; ?> que es una variable superglobal que hace referencia al script PHP actual, -->
    <!--si quiero que los datos obtenidos en el post abran en una nueva pagina, sustituo la variable global por el nuevo archivo, siempre y cuando el codigo php esté en este nuevo archivo -->
    <form method="post" action="./reservadehotel_php.php">
        <label for="precio">Precio por noche:</label>
        <input name = "precio" type="number" min="1" step="any"required>
        <br>
        <br>
        <label for="personas">Número de personas:</label>
        <select name="personas" id="personas">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br>
        <br>
        <label for="ciudad">Ciudad:</label>
        <select name="ciudad" id="ciudad">
            <option value="Madrid">Madrid</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Valencia">Valencia</option>
            <option value="Bilbao">Bilbao</option>
            <option value="Sevilla">Sevilla</option>
        </select>
        <br>
        <br>
        <label for="pregunta">WIFI</label>
        <input type="checkbox" name="wifi" value="wifi" unchecked required />
        <br>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>