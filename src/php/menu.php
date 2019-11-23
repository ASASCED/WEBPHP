<?php

session_start();

if (!isset($_SESSION['tipo'])) {
    header('location: index.php');
} else {
    if ($_SESSION['tipo'] != 2) {
        header('location: index.php');
    }
}

?>
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
                    <h1>Administrador</h1>
                </li>
            </ul>
        </div>
        <a name="" id="" class="btn btn-danger" href="cerrar.php" role="button">Cerrar Sesion</a>
    </nav>

    <br><br>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="consulta" name="consulta">Buscar</span>
        </div>
        <input id="caja_busqueda" type="text" class="form-control">
    </div>

    <br>

    <div id="datos"></div>

    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./../js/main.js"></script>
</body>

</html>