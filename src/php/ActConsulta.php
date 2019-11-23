<?php
include "conexion.php";

if (isset($_POST['_id'])) {
    $name = $_POST['_id'] ;

    $consulta = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);

    $lista = mysqli_fetch_array($resultado);
}