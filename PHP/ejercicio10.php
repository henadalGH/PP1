<?php
class Empleado {
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function pagaImpuesto() {
        if ($this->sueldo < 3000) {
            echo $this->nombre . " debe pagar impuestos.";
        } else {
            echo $this->nombre . " no debe pagar impuestos.";
        }
    }
}

// Ejemplo de uso
$empleado1 = new Empleado("Juan", 2500);
$empleado1->pagaImpuesto();

?>