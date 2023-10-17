<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

</head>

<body>

    <form action="ejercicio3.php" method="POST" name="factorial">
        <div>
            <h3>CALCULAR EL FACTORIAL DE UN NUMERO</h3>

            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" placeholder="Introduzca el numero aqui"><br><br>

            <input type="submit" value="Calcular">
        </div>
    </form><br>

    <?php

    if (isset($_POST['numero'])) {
        $num = $_POST['numero'];
        echo factorial($num);
    }

    function factorial($num) {
        $r = 1;
        for ($i = $num; $i > 0; $i--) {
            $r *= $i;
        }
        return $r;
    }

    ?>

</body>

</html>