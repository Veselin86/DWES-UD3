<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1b</title>

</head>

<body>

    <?php
    if ($_POST['numero1'] && $_POST['numero2']) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicación de $numero1 y $numero2 es: $resultado";
    } else {
        echo "Por favor, ingrese ambos números, diferentes de '0'";
    }
    ?>

    <a href="ejercicio1a.html"><br>Pincha en este enlace para volver atras</a>

</body>

</html>