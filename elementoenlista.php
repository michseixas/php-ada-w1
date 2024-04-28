<?php 

function verificarElementoEnLista($elemento, $lista) {
    return in_array($elemento, $lista);
}

$lista = array(1, 2, 3, 4, 5);
$elemento = 3;

echo verificarElementoEnLista($elemento, $lista) ? "El elemento $elemento está en la lista." : "El elemento $elemento no está en la lista.";

?>
