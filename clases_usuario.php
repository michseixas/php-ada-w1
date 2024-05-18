<!-- 3. POO CLASE USUARIO
Creen una clase User que tenga los siguientes atributos
- username: texto con apodo o nickname del usuario (no acepta espacios)
- nombre: texto
- apellido: texto
- email: texto, verificar que tenga formato de email
- edad: entero (verificar que sea entero positivo y que no sea mayor a 125)

Y los siguientes métodos:
- imprimirUsuario: Mostrar de forma "bonita" todos los datos del usuario en un mensaje
- nombreCompleto: La concatenación del nombre y el apellido
- esMayorDeEdad: Determina si un User es mayor de 17 años o no

Además debo de poder modificar todos los atributos (excepto el username) -->

<?php

class User {
    public string $username;
    public string $nombre;
    public string $apellido;
    public string $email;
    public int $edad;

    function __construct($u, $n, $a, $e, $ed) {
      $this->username = $u;
      $this->nombre = $n;
      $this->apellido = $a;
      $this->email = $e;
      $this->edad = $ed;
    }

    function imprimirUsuario() {
        echo "\nEl usuario $this->username es una gata hermosa de la familia $this->apellido y tiene $this->edad años";
    }

    /* por defecto es publico
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
    }*/
}

$cat1 = new User("bochina", "Bo", "Seixas", "bo@cat.com", 13);
$user1 = new User("jvanoli", "Javier", "Vanoli", "jvanoli@gmail.com", 44);

echo $cat1->imprimirUsuario();
echo $user1->imprimirUsuario();

/*
$mi_coche = new Coche("ro", );
$mi_coche->encender_motor();
$mi_coche->accelerar(20);
echo $mi_coche->mostrar_velocidad() . "\n";
$mi_coche->frenar(10);
echo $mi_coche->mostrar_velocidad() . "\n";
$mi_coche->accelerar(120);
echo $mi_coche->mostrar_velocidad() . "\n";
*/

?>

