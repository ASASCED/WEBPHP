<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])) {
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['tipo'])) {
        switch ($_SESSION['tipo']) {
            case 1:
                header('location: usuario.php');
            break;

            case 2:
                header('location: menu.php');
            break;
        }
    }

    if(isset($_POST['matricula']) && isset($_POST['contra'])){
        $matricula = $_POST['matricula'];
        $contra = $_POST['contra'];

        $db = new Database();
        $query = $db -> connect() -> prepare('SELECT *FROM usuarios WHERE matricula = :matricula');
        $query -> execute(['matricula' => $matricula]);
        $row = $query -> fetch(PDO::FETCH_NUM);

        if ($row == true) {
            if (password_verify($contra, $row[6])) {
                $rol = $row[7];
                $_SESSION['tipo'] = $rol;

                switch ($_SESSION['tipo']) {
                    case 1:
                        header('location: usuario.php');
                    break;

                    case 2:
                        header('location: elegir.php');
                    break;
                }
            }
        } else {
            echo 'El usuario o contraseña son incorrectos';
        }
    }

?>