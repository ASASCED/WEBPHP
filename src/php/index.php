<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form action="sesion.php" method="POST" name="formulario">
        <div class="grid">
            <h1>Inicio</h1>
            <figure class="circular">
                <img src="../img/inicio3.jpg" alt="">
            </figure>
            <input id="matricula" autocomplete="off" name="matricula" type="text" value="" minlength="10" maxlength="10" placeholder="Ingresa tu matricula" required>
            <div id="mat" class="validacion"></div>
            <div id="vacio" class="validacion"></div>
            <input id="_verpass" name="contra" type="password" placeholder="Ingresa tu contraseña" minlength="3" maxlength="8" required>
            <button id="boton" onclick="encriptar()">Iniciar sesion</button>
            <a href="registro.php">Registrarse</a>
        </div>
    </form>
    <script src="../js/validacionNumeros.js"></script>
    <script src="../js/library/jquery.js"></script>
    <script src="../js/library/aes.js"></script>
    <script src="../js/library/md5.js"></script>
    <script src="../js/liveValid.js"></script>
    <script src="../js/encriptar.js"></script>
</body>

</html>