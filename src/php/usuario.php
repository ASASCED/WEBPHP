<?php

session_start();

if (!isset($_SESSION['tipo'])) {
    header('location: index.php');
} else {
    if ($_SESSION['tipo'] != 1) {
        header('location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <h1>Usuario</h1>
                </li>
            </ul>
        </div>
        <a name="" id="" class="btn btn-danger" href="cerrar.php" role="button">Cerrar Sesion</a>
    </nav>

    <br><br>

    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido!</h1>
        <p class="lead">Esta es la pantalla de usuario y no tienes acceso a modificar ningun elemento del sistema</p>
    </div>
    
    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>