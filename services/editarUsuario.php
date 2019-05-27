<?php
    editarUsuario($_POST['id'], $_POST['nombreEdit'], $_POST['cedulaEdit'], $_POST['telefonoEdit']);

    function editarUsuario($id, $nombreEdit, $cedulaEdit, $telefonoEdit) {
        include_once 'conexion.php';

        $query = "UPDATE tablausuario SET nombre='$nombreEdit', cedula='$cedulaEdit', telefono='$telefonoEdit'
        WHERE id='$id'";

        echo $result = mysqli_query($con, $query);
    }
?>