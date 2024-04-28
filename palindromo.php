<?php

// hello world => no
// race car => si
// Yreka bakery => si
function es_palindromo($mi_palabra)
{
  for ($i = 0; $i < strlen($mi_palabra); $i++)
  {
    $ultima_posicion = strlen($mi_palabra) - 1;
    if ($mi_palabra[0+$i] != $mi_palabra[$ultima_posicion - $i])
    {
      return false;
    }
    if ($i >= $ultima_posicion - $i) {
      return true;
    }
  }
}


$palabra = "reconocer";
$resultado = es_palindromo($palabra);
echo "\n$palabra es palindrdomo? - " . ($resultado ? "si" : "no");

$palabra = "apio";
$resultado = es_palindromo($palabra);
echo "\n$palabra es palindrdomo? - " . ($resultado ? "si" : "no");

$palabra = "ada";
$resultado = es_palindromo($palabra);
echo "\n$palabra es palindrdomo? - " . ($resultado ? "si" : "no");
