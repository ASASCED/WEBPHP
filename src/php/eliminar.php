<?php

include 'conexion.php';

if(isset($_POST['_eliminar'])){
    $id = $_POST['_eliminar'];

    $eliminar = "DELETE FROM usuarios WHERE id = $id";
    $resultado = mysqli_real_query($conexion, $eliminar);
    echo "Datos eliminados";
    echo '<script>top.location.href = "menu.php";</script>';
} else {
    echo "Error en los datos";
}