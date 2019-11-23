<?php

include 'conexion.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $consulta = "SELECT *FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);
    $lista = mysqli_fetch_array($resultado);

    for ($i=0; $i < $lista; $i++) { 
        if ($lista['id'] == $id) {
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            } else{
                $name = $lista['nombre'];
            }
            
            if (!empty($_POST['Apaterno'])) {
                $Apaterno = $_POST['Apaterno'];
            } else{
                $Apaterno = $lista['a_paterno'];
            }
            
            if (!empty($_POST['Amaterno'])) {
                $Amaterno = $_POST['Amaterno'];
            } else{
                $Amaterno = $lista['a_materno'];
            }
            
            if (!empty($_POST['email'])) {
                $matricula = $_POST['email'];
            } else{
                $matricula = $lista['matricula'];
            }
            
            if (!empty($_POST['correo'])) {
                $correo = $_POST['correo'];
            } else{
                $correo = $lista['correo'];
            } 
                       
            if (!empty($_POST['_password2'])) {
                $_password2 = $_POST['_password2'];
            } else{
                $_password2 = $lista['contra'];
            }
            
            if (!empty($_POST['_verpass'])) {
                $_verpass = $_POST['_verpass'];
            } else{
                $_verpass = $lista['contra'];
            }
            
            if (!empty($_POST['_tipo'])) {
                $tipo = $_POST['_tipo'];
            } else{
                $tipo = $lista['tipo'];
            }
        }
        $lista = mysqli_fetch_array($resultado);
    }

    $insertar = "UPDATE usuarios SET nombre = '$name', a_paterno = '$Apaterno', a_materno = '$Amaterno', correo = '$correo', matricula = '$matricula', contra = '$_password2', tipo = '$tipo' WHERE id = $id";

    $resultado = mysqli_real_query($conexion, $insertar);

    echo "Datos actualizados correctamente";
    echo '<script>top.location.href = "menu.php";</script>';
} else{
    echo "Error en actualizar datos";
}

