<?php
    agregarUsuario($_POST['nombre'], $_POST['cedula'], $_POST['telefono']);

    function agregarUsuario($nombre, $cedula, $telefono) {
        include_once 'conexion.php';

        $query = "INSERT INTO tablausuario (nombre, cedula, telefono)
        VALUES ('$nombre', '$cedula', '$telefono')";

        echo $result = mysqli_query($con, $query);
    }
?>