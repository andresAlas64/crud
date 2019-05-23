<?php
    include_once 'include/docDeclaracion.php';
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group mb-3">
                <input type="text" id="buscarUsuario" class="form-control" placeholder="Buscar por nombre o cedula" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <a href="#" class="btn btn-outline-color" title="Agregar usuario" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-outline-color" title="Limpiar" onclick="limpiar();"><i class="fas fa-broom"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="services/insertarUsuario.php" method="POST">
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
</div>
<!-- Modal -->
<div id="tablaUsuario" class="mb-5"></div>
<?php
    include_once 'include/docCierre.php';
?>