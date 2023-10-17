<?php

class Trabajador {
    protected string $nombre;
    protected float $sueldo;

    public function __construct($nombre) {
        $this -> nombre = $nombre;
    }

    public function calcularSueldo() {
        return $this -> sueldo;
    }
}

class Empleado extends Trabajador {
    public $horas_mensuales;
    public function __construct($nombre, $horas_mensuales) {
        parent :: __construct($nombre);
        $this -> sueldo = $horas_mensuales * 9.5;
    } 

    public function __get($atributo) {
        return $this -> $atributo;
    }
}

class Gerente extends Trabajador {
    public $porcentaje;
    public function __construct($nombre, $porcentaje) {
        parent :: __construct($nombre);
        $this -> sueldo = 2500 * (($porcentaje/100)+1);
    }

    public function __get($atributo) {
        return $this->$atributo;
    }
}

$empleado = new Empleado('Jorge Garcia', 160);
$gerente = new Gerente('Ana Perez', 2);

echo "El empleado " . $empleado -> nombre . " percibe un sueldo de " . $empleado -> calcularSueldo() . " €<br>";
echo "El gerente " . $gerente -> nombre . " percibe un sueldo de " . $gerente -> calcularSueldo() . " €";

?>