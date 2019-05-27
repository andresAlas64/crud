<?php
    include_once '../services/conexion.php';

    $query = "SELECT * FROM tablausuario";

    $result = mysqli_query($con, $query);

    echo "<div class='container mb-5'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='table-responsive'>
                    <caption>
                        <button class='btn btn-color' data-toggle='modal' data-target='#modalAgregar'>Agregar <i class='fas fa-user-plus'></i></button>
                    </caption>
                    <table class='table table-striped mt-3'>
                        <thead class='thead-color'>
                            <tr>
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th class='text-center'>Editar</th>
                                <th class='text-center'>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($fila = mysqli_fetch_array($result)) {

                            $datos = $fila[0].'||'.
                                $fila[1].'||'.
                                $fila[2].'||'.
                                $fila[3];

                            echo "<tr>
                                <td>".$fila['nombre']."</td>
                                <td>".$fila['cedula']."</td>
                                <td>".$fila['telefono']."</td>
                                <td class='text-center'>
                                    <button class='btn btn-color btn-sm' data-toggle='modal' data-target='#modalEditar' onclick='agregarInfoForm(\" $datos \");'>
                                        <i class='fas fa-pencil-alt'></i>
                                    </button>
                                </td>
                                <td class='text-center'>
                                    <button class='btn btn-color btn-sm' onclick='consultarEliminar(\" $fila[0] \");'>
                                        <i class='fas fa-trash-alt'></i>
                                    </button>
                                </td>
                            </tr>";
                        }
                        echo "</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>";
?>