<?php

    class Empleado{
        private string $nombre;
        private float $sueldo;
        private int $numero_empleado;
        private static int $total_empleados = 0;
        
        public function __construct($nombre, $sueldo) {
            $this -> nombre = $nombre;
            $this -> sueldo = $sueldo;
            self :: $total_empleados ++;
            $this -> numero_empleado = self :: $total_empleados;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getNumeroEmpleado() {
            return $this -> numero_empleado;
        }

        public function getSueldo() {
            return $this -> sueldo;
        }

        public function setNombre($nombre) {
            $this -> nombre = $nombre;
        }

        public function setSueldo($sueldo) {
            $this -> sueldo = $sueldo;
        }

        public function pagarImpuesto() {
           return $this -> sueldo/12 > 1200 ? true : false;
        }
    }


    $empleado1 = new Empleado("Jorge", "12000");
    $empleado2 = new Empleado("Alejandra", "19000");

    echo $empleado1 -> getNumeroEmpleado() . ". " . $empleado1 -> getNombre() . " tiene un sueldo de " . $empleado1 -> getSueldo() . " €<br>";
    echo $empleado2 -> getNumeroEmpleado() . ". " . $empleado2 -> getNombre() . " tiene un sueldo de " . $empleado2 -> getSueldo() . " €<br>";

    $empleado1 -> setNombre($empleado1 -> getNombre() . " Rodriguez");    
    $empleado2 -> setNombre($empleado2 -> getNombre() . " Fernandez");
    $empleado1 -> setSueldo($empleado1 -> getSueldo() * (11/10));
    $empleado2 -> setSueldo($empleado2 -> getSueldo() * (11/10));

    echo $empleado1 -> getNumeroEmpleado() . ". " . $empleado1 -> getNombre() . " tiene un sueldo de " . $empleado1 -> getSueldo() . " €<br>";
    echo $empleado2 -> getNumeroEmpleado() . ". " . $empleado2 -> getNombre() . " tiene un sueldo de " . $empleado2 -> getSueldo() . " €<br>";

    function mostrarImpuestos(Empleado $empleado) {
        $impuestos = $empleado -> pagarImpuesto() ? "tiene que pagar impuestos" : "no tiene que pagar impuestos";
        echo $empleado -> getNombre() . " tiene un sueldo de " . $empleado -> getSueldo() . " € y " . $impuestos . "<br>";
    }

    mostrarImpuestos($empleado1);
    mostrarImpuestos($empleado2);

?>