<?php

include 'conexion.php';

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);
$lista = mysqli_fetch_array($resultado);
