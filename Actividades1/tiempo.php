<?php
session_start();

$hora_entrada = $_SESSION ['hora_entrada'];
$hora_actual = time();
$hora_transcurida = $hora_actual - $hora_entrada;
$formato_hora= gmdate("H:i:s", $hora_transcurida);

echo $formato_hora;

?>