<?php
    $b = isset($_POST['texto']) ? $_POST['texto'] : 0;

    buscarUsuario($b);

    function buscarUsuario($b) {
        include_once 'conexion.php';

        $query = "SELECT * FROM tablausuario
        WHERE nombre LIKE '%".$b."%' OR cedula LIKE '%".$b."%'";

        $result = mysqli_query($con, $query);

        $row_count = mysqli_num_rows($result);

        if($row_count == 0) {
            echo "<p class='text-center'>No se han encontrado resultados para '<b>".$b."</b>'</p>";
        }else {
            echo "<div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='table-responsive'>
                            <table class='table table-striped'>
                                <thead class='thead-color'>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cedula</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                        <td>".$row['nombre']."</td>
                                        <td>".$row['cedula']."</td>
                                        <td>".$row['telefono']."</td>
                                        <td class='text-center'><a href='#' class='icono' title='Editar' data-toggle='modal' data-target='.bd-example-modal-lg-editar'><i class='fas fa-pencil-alt'></i></a></td>
                                        <td class='text-center'><a href='#' class='icono' title='Eliminar'><i class='fas fa-trash-alt'></i></a></td>
                                    </tr>";
                                }
                                echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
    /* ---- Modal ---- */
    echo '<div class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cedula</label>
                            <input type="text" name="cedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese la cedula">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el telefono">
                        </div>
                        <button type="submit" class="btn btn-color">
                            <i class="fas fa-save"></i> Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
    /* ---- Modal ---- */
?>