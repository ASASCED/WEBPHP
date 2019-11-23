<?php
$staticEmail = '1117271054';

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['_password'];

    if ($email == $staticEmail && encrypt($password)) {
        echo 'El usuario a iniciado sesion correctamente<br>';
    } else {
        echo 'La contraseña o el correo son incorrectos<br>';
    }
}

function encrypt($password) {
    $staticPassword = 'Anix300Lost';
    $hash = password_hash($staticPassword, PASSWORD_DEFAULT, ['cost' => 10]);
    if (password_verify($password, $hash)) {
        echo "La contraseña: " . $password . " Concide con el encriptado: " . $hash . '<br>';
        return true;
    } else {
        return false;
    }
}