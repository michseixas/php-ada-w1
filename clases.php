<?php

class Coche {
    private int $numero_de_ruedas;
    private string $color;
    private bool $encendido;
    private float $velocidad;

    function __construct($color) {
      $this->numero_de_ruedas = 4;
      $this->color = $color;
      $this->encendido = false;
      $this->velocidad = 0;

    }

    //por defecto es publico
    function encender_motor() {
      $this->encendido = true; 
    }

    function apagar_motor() {
      $this->encendido = false;
      $this->velocidad = 0;
    }

    function accelerar($n=10) {
      if ($n < 0 OR $n + $this->velocidad >= 120 OR !$this->encendido) {
        return;
      }
      $this->velocidad = $this->velocidad + $n;
    }

    function frenar($n=10) {
      if ($n <= 0 OR $this->velocidad - $n < 0) {
        return;
      }
      $this->velocidad = $this->velocidad - $n;
    }

    function  mostrar_velocidad() {
      return $this->velocidad;
    }
}

$mi_coche = new Coche("rojo", );
$mi_coche->encender_motor();
$mi_coche->accelerar(20);
echo $mi_coche->mostrar_velocidad() . "\n";
$mi_coche->frenar(10);
echo $mi_coche->mostrar_velocidad() . "\n";
$mi_coche->accelerar(120);
echo $mi_coche->mostrar_velocidad() . "\n";

?>

