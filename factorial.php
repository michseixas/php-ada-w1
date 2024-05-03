<?php

function factorial($n)
{
    if ($n === 0 || $n === 1) { //porque el factorial de 1 es 1, y el de 0 es 1 (matematica...)
        return 1;
    }

    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado = $resultado * $i;
    }
    return $resultado;
}

$patata = readline('Cual factorial quieres saber?');

echo "El resultado del factorial de " . $patata . " es " . factorial($patata);

?>
