<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <style>
        div {
            text-align: center;
            width: 10%;
            border: 2px solid black;
            padding: 1%;
        }
    </style>

</head>

<body>

    <form action="ejercicio2.php" method="POST" name="calculadora">
        <div>
            <h3>CALCULADORA</h3>

            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1" placeholder="Introduzca numero 1"><br><br>

            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2" placeholder="Introduzca nuemro 2"><br><br>

            <input type="radio" name="calc" id="sumar" value="+">
            <label for="sumar">+</label>

            <input type="radio" name="calc" id="restar" value="-">
            <label for="restar">-</label>

            <input type="radio" name="calc" id="multiplicar" value="*">
            <label for="multiplicar">*</label>

            <input type="radio" name="calc" id="dividir" value="/">
            <label for="dividir">/</label><br><br>

            <input type="submit" value="Calcular">
        </div>
    </form><br>

    <?php

    error_reporting(0);

    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['calc'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $calc = $_POST['calc'];
    }

    if ($_POST['calc'] == "*") {
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicación de $numero1 y $numero2 es: $resultado";
    } elseif ($_POST['calc'] == '+') {
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma de $numero1 y $numero2 es: $resultado";
    } elseif ($_POST['calc'] == '-') {
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta de $numero1 y $numero2 es: $resultado";
    } elseif ($_POST['calc'] == '/') {
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "El resultado de la division de $numero1 y $numero2 es: $resultado";
        } else {
            echo "No se puede dividir por cero.";
        }
    }

    ?>

</body>

</html>