<?php

function parOImpar($n)
{
    if ($n % 2 === 0){
        return "par";
    } else {
        return "impar";
    }
};

$patata = readline('Elige un número y te diré si es par o ímpar!');

echo "El número " . $patata . " es " . parOImpar($patata);

?>
