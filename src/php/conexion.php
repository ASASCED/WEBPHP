<?php
$conexion = new mysqli("localhost", "root", "", "formulario_diana");

if ($conexion -> connect_error) {
    echo ("Conexion fallida: " . $conexion -> connect_error);
}
