<?php 

//4. Escribe una función que devuelva el elemento más grande de una lista.
$list = array(10, 5, 20, 15, 30, 50);

echo max($list);

?>



<?php

function mas_grande($lista) {
    $elemento = $lista[0];
    foreach ($lista as $prueba) {
        if ($prueba > $elemento) {
            $elemento = $prueba;
        }
    }
    return $elemento;
}

$mi_lista = [1, 4, 5, 678, 200, 3, 334, 52, 100];

$ganador = mas_grande($mi_lista);



echo "El elemento más grande de la lista es: " . $ganador;

?>