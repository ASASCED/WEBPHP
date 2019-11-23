<?php
include "conexion.php";
include 'AES.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'] ;
    $Apaterno = $_POST['Apaterno'];
    $Amaterno = $_POST['Amaterno'];
    $email = $_POST['email'];
    $password2 = $_POST['_password2'];

    $options = array('@outlook.com', '@gmail.com', '@hotmail.com');
    $emails = $_POST['_emails'];

    $selection = $_POST['_firstPart'] . $options[$emails];
    
    $hash = password_hash($password2, PASSWORD_DEFAULT, ['cost' => 10]);

    echo "Los datos fueron almacenados de forma correcta";

    $insertar = "INSERT INTO usuarios (matricula, a_paterno, a_materno, nombre, correo, contra, tipo) VALUES ('$email', '$Apaterno', '$Amaterno', '$name', '$selection' , '$hash' , '1')";
    $resultado = mysqli_real_query($conexion, $insertar);
    
    echo $name.'<br>'.$Apaterno.'<br>'.$Amaterno.'<br>'.$email.'<br>'.$selection.'<br>'.$hash.'<br>'.$password2;
    echo '<script>top.location.href = "index.php";</script>';
} else{
    echo "los datos no se almacenaron correctamente";
}