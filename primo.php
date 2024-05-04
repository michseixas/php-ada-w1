<?php

function esPrimo($n)
{
    $resultado = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0){
            $resultado = $resultado +1;
        } 
    } 
    echo "Este número tiene $resultado divisores\n";

    if ( $resultado == 2){
        return "primo";
    } else {
        return "compuesto";
    }
}

$patata = readline('Dime un numero y te diré que es: ');

echo "El número " . $patata . " es " . esPrimo($patata);

?>

Otra solución (pasada en clase):
// 3. Crear una función que calcule si un numero es primo o no

// ex: es 10 primo? 
//   probamos 2: 10 / 2

// echo "10 / 2 es " . (10 / 2) . "\n";
// echo "11 / 2 es " . (11 / 2) . "\n";

// echo "10 % 2 es " . (10 % 2) . "\n"; 
// echo "11 % 2 es " . (11 % 2) . "\n"; 

function es_primo($n) {
  for ($i = 2; $i < $n; $i++){
    if ($n % $i == 0) {
      return false; 
    }
  }
  return true; 
}

// echo "es 10 primo? - " . (es_primo(10) ? "Si" : "No") . "\n";
// echo "es 2 primo? - " . (es_primo(2) ? "Si" : "No") . "\n";
// echo "es 4 primo? - " . (es_primo(4) ? "Si" : "No") . "\n";
// echo "es 9 primo? - " . (es_primo(9) ? "Si" : "No") . "\n";
// echo "es 5 primo? - " . (es_primo(5) ? "Si" : "No") . "\n";
// echo "es -5 primo? - " . (es_primo(-5) ? "Si" : "No") . "\n";
// echo "es -4 primo? - " . (es_primo(-4) ? "Si" : "No") . "\n";
