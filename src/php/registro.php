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
    <form action="datosre.php" method="POST" name="formulario">
        <div class="grid">
            <h1>Registro</h1>
            <input id="_name" name="name" type="text" placeholder="Ingresa tu nombre" onkeyup="this.value=this.value.toUpperCase()" required>
            <input id="_Apaterno" name="Apaterno" type="text" placeholder="Ingresa tu apellido Paterno" onkeyup="this.value=this.value.toUpperCase()" required>
            <input id="_Amaterno" name="Amaterno" type="text" placeholder="Ingresa tu apellido Materno" onkeyup="this.value=this.value.toUpperCase()" required>
            <input id="matricula" name="email" class="email" type="text" placeholder="Ingresa tu matricula" required>
            <div class="mini_grid">
                <input type="text" class="input_email" name="_firstPart" placeholder="Ingresa tu email" maxlength="255" required />    
                <select id="ddlViewBy" class="sel_email" name="_emails">
                    <option value="1">@outlook.com</option>
                    <option value="2" selected="selected">@gmail.com</option>
                    <option value="3">@hotmail.com</option>
                </select>
            </div>
            <div id="mat" class="validacion"></div>
            <input id="_password2" name="_password2" type="password" placeholder="Ingresa tu contraseña" required>
            <input id="_verpass" name="_verpass" type="password" placeholder="Verifica tu contraseña" required>
            <div id="comprobar" class="contra validacion"></div>

            <button> Enviar </button>
            <a href="index.php">Iniciar sesion</a>
        </div>
    </form>

    <script src="../js/library/aes.js"></script>
    <script src="../js/library/jquery.js"></script>
    <script src="../js/validacionNumeros.js"></script>
    <script src="../js/validarLetras.js"></script>
    <script src="../js/liveValid.js"></script>
    <script src="../js/encriptar.js"></script>
    <script src="./../js/inputEnc.js"></script>
</body>

</html>