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
<form action="" method="POST" name="formulario">
        <div class="grid">
            <h1>MENU</h1>
            <figure class="circular">
                <img src="../img/menu3.jpg" alt="">
            </figure>            
            <button id="boton" onclick="">Archivo PDF</button> 
            <button id="boton" onclick="">CRUD</button> 
            <button id="boton" onclick="">Graficar</button> 
            <button id="boton" onclick="">Enviar correo</button>  
            <button id="boton" onclick="">Creación del PDF</button>            
        </div>
        </form>

</body>

</html>