<?php
//3. Escriba una función que verifique si un elemento aparece en una lista.
//Mi solución simple con metodo:
// $carrito = array("Banana", "Pera", "Manzana", "Uva");
// if (in_array("Banana", $carrito)) {
//     echo "Ya hay Banana!";
// } else {
//     echo "No hay bananas en el carrito!";
// }
// 

$mi_lista = ["a", "b", "c"];

function aparece($lista, $elemento) {
    foreach ($lista as $prueba) {
        if ($prueba == $elemento) {
            echo "Si\n";
            return;
        }
    }
    echo "No";
}

echo "lista tiene c?\n";
aparece($mi_lista, "c");
echo "lista tiene d?\n";
aparece($mi_lista, "d");

?>