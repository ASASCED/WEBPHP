<?php

include 'conexion.php';

$salida = "";
$query = "SELECT *FROM usuarios ORDER BY id";

if (isset($_POST['consulta'])) {
    $q = $conexion->real_escape_string($_POST['consulta']);
    $query = "SELECT id, nombre, a_paterno, a_materno, correo, matricula, contra, tipo FROM usuarios WHERE matricula LIKE '%".$q."%'";
}

$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    
    $salida.= "
    <table class='tabla_datos table'>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>A PATERNO</th>
                <th>A MATERNO</th>
                <th>CORREO</th>
                <th>MATRICULA</th>
                <th>CONTRASEÑA</th>
                <th>TIPO</th>
                <th>MODIFICACIONES</th>
            </tr>
        </thead>
    <tbody>
    ";

    while($fila = $resultado->fetch_assoc()) {
        $salida.="
        <tr>
            <td>".$fila['nombre']."</td>
            <td>".$fila['a_paterno']."</td>
            <td>".$fila['a_materno']."</td>
            <td>".$fila['correo']."</td>
            <td>".$fila['matricula']."</td>
            <td>".$fila['contra']."</td>
            <td>".$fila['tipo']."</td>
            <td>
                <form styles='margin-bottom: 5px;' action='modificar.php' method='POST'>
                    <input type='hidden' name='_name' value='" . $fila['nombre'] . "'>
                    <input type='hidden' name='_Apaterno' value='" . $fila['a_paterno'] . "'>
                    <input type='hidden' name='_Amaterno' value='" . $fila['a_materno'] . "'>
                    <input type='hidden' name='email' value='" . $fila['matricula'] . "'>
                    <input type='hidden' name='correo' value='" . $fila['correo'] . "'>
                    <input type='hidden' name='_password2' value='" . $fila['contra'] . "'>
                    <input type='hidden' name='_id' value='" . $fila['id'] . "'>
                    <button type='submit' value='submit' class='btn btn-danger btn block'>Modificar</button>
                </form>
                <form action='eliminar.php' method='POST'>
                    <input type='hidden' name='_eliminar' value='". $fila['id']."'>
                    <button type='submit' value='submit' class='btn btn-warning btn block'>Eliminar</button>
                </form>
            </td>
        </tr>
        ";
    }

    $salida.= "</table></tbody>";

} else {
    $salida = "no hay datos :(";
}

echo $salida;
$conexion->close();