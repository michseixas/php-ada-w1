

<?php
//1. Escriba una programa que pregunte al usuario su nombre y lo salude con su nombre.
//2. Modifique el programa anterior de modo que solo los usuarios Alice y Bob sean recibidos con sus nombres.

$a =readline('Cual es tu nombre: ');

if ($a == "Alice" || $a == "Bob") {
    echo "Hola, " . $a . " , empezamos el curso de PHP";

} else {
    echo "No tienes autorización!";
}

?>