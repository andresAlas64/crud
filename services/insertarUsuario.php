<?php
    insertarUsuario($_POST['nombre'], $_POST['cedula'], $_POST['telefono']);

    function insertarUsuario($nombre, $cedula, $telefono) {
        include_once 'conexion.php';

        $query = "INSERT INTO tablausuario (nombre, cedula, telefono)
        VALUES ('$nombre', '$cedula', '$telefono')";

        $result = mysqli_query($con, $query);

        header('Location: ../index.php');
    }
?>