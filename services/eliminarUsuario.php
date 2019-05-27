<?php
    eliminarUsuario($_POST['id']);

    function eliminarUsuario($id) {
        include_once 'conexion.php';

        $query = "DELETE FROM tablausuario
        WHERE id = '$id'";

        echo $result = mysqli_query($con, $query);
    }
?>