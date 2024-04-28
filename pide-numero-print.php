<?php

//5. Escriba un programa que pida al usuario un número n e imprima la suma de los números del 1 al n

echo "Dime un número: ";
$n = intval(trim(fgets(STDIN)));

// Inicializar la variable para almacenar la suma
$suma = 0;

// Calcular la suma de los números del 1 al n
for ($i = 1; $i <= $n; $i++) {
    $suma += $i;
}

echo "La suma de los números del 1 al $n es: $suma\n";

?>
