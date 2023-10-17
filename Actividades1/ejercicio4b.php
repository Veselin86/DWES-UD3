<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>

    <style>
        div{
            text-align: left; 
            width: 500px; 
            border: 2px solid orange;
            padding: 3%;
        }
        h3 {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 1px solid black;
        }
    </style>

</head>

<body>

    <div>
        <h3>Ejercicio4b.php</h3>
        <h3>Datos recogidos:</h3>

        <?php

            function recoge($var) {
                if (isset($_GET[$var])) {
                    $tmp = strip_tags($_GET[$var]);
                    $tmp = trim($tmp);
                    return $tmp;
                }
            }

            $nombre = recoge("nombre");
            $sexo = recoge("sexo");
            $edad = recoge("edad");
            $peso = recoge("peso");
            $estCivil = recoge("estCivil");
            $aficiones = isset($_REQUEST["aficiones"]) ? $_REQUEST["aficiones"] : [];

            if ($nombre !== "") {
                echo "<ul><li>Nombre: $nombre</li>";
                echo "<li>Sexo: $sexo</li>";
                echo "<li>Edad: $edad años</li>";
                echo "<li>Peso: $peso kg</li>";
                echo "<li>Estado Civil: $estCivil</li>";
                echo "<li>Aficiones: " . count($aficiones) . "</li><ul>";
                foreach ($aficiones as $aficion){
                    echo "<li>$aficion</li>";
                }
                echo "</ul></ul>";
            } else {
                echo '<script>alert("Por favor introduzca su nombre!\nSe derigira al formulario de nuevo!");
                window.location.href="ejercicio4a.html"</script>';
            }
           
        ?>

        <a href="ejercicio4a.html">Volver</a>

    </div>

</body>

</html>