<?php

    class Mamifero {
        protected string $especie;
        protected string $sonido;
        protected string $familia;

        public function __construct($especie, $sonido) {
            $this -> especie = $especie;
            $this -> sonido = $sonido;
        }

        public function sonido(){
            return "Sonido de " . $this -> especie . ", de la familia " . $this -> familia . ": " . $this -> sonido;
        }
    }

    class Perro extends Mamifero{
        public function __construct(string $familia) {
            parent :: __construct("perro", "bau bau");
            $this -> familia = $familia;
        }
    }

    class Gato extends Mamifero{
        public function __construct(string $familia) {
            parent :: __construct("gato", "miau miau");
            $this -> familia = $familia;
        }
    }

    $perro = new Perro("canidos");
    $gato = new Gato("felinos");

    echo $perro -> sonido() . "<br>";
    echo $gato -> sonido() . "<br>";

?>