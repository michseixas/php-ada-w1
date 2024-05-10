<!-- 1. FORMULARIO DE CONTACTO
Creen un formulario de contacto de una página donde tenga los siguientes campos y los siguientes tipos:
- Nombre: campo de texto
- Email: campo de texto. Hay que verificar que sea email valido
- Pregunta: campo de texto grande
- Acepta compartir información: checkbox para confirmar que se aceptan las condiciones

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
    <h1>Formulario de contacto</h1>
    <!--Paso 1: implementar el Form que utiliza el metodo POST para enviar los datos -->
    <!--En lugar de usar en action= echo $_SERVER["PHP_SELF"]; ?> que es una variable superglobal que hace referencia al script PHP actual, -->
    <!--si quiero que los datos obtenidos en el post abran en una nueva pagina, sustituo la variable global por el nuevo archivo, siempre y cuando el codigo php esté en este nuevo archivo -->
    <form method="post" action="./formulario1_php.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <br>
        <label for="pregunta">Pregunta:</label>
        <br>
        <input type="text" name="pregunta" style="width:300px;height:80px;font-size:10pt;" required>
        <br>
        <br>
        <input type="checkbox" name="aceptar" value="aceptar" unchecked required />
        <label for="pregunta">Acepto compartir información</label>
        <br>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>