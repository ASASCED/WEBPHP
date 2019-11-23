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
    <div class="container">
        <h1>Modificar elemento</h1>
        <br><br>
        <?php
        include 'ActConsulta.php';
            echo '<form action="ActDatos.php" method="POST">';
                echo '<label>Nombre</laberl>';
                echo '<input class="form-control" name="name" placeholder="'.$lista['nombre'].'">';
                echo '<label>A. Paterno</laberl>';
                echo '<input class="form-control" name="Apaterno" placeholder="'.$lista['a_paterno'].'">';
                echo '<label>A. Materno</laberl>';
                echo '<input class="form-control" name="Amaterno" placeholder="'.$lista['a_materno'].'">';
                echo '<label>Matricula</laberl>';
                echo '<input class="form-control" name="email" placeholder="'.$lista['matricula'].'">';
                echo '<label>Correo</laberl>';
                echo '<input class="form-control" name="correo" placeholder="'.$lista['correo'].'">';
                echo '<label>Tipo</laberl>';
                echo '<input class="form-control" name="_tipo" placeholder="'.$lista['tipo'].'">';
                echo '<input class="form-control" type="hidden" name="_password2" placeholder="'.$lista['contra'].'">';
            
                echo "<br>";
                echo '<input type="hidden" name="id" value="'.$lista['id'].'">';
                echo '<button style="margin-right: 5px";type="submit" value="submit" class="btn btn-dark">Actualizar</button>';
                echo '<a href="menu.php" class="btn btn-danger">Cancelar</a>';
            echo "</form>";
        ?>
    </div>

    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>