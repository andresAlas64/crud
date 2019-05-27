$(document).ready(function() {
    $('#tabla').load('componentes/tabla.php');
});

$(document).ready(function() {
    $('#agregarUsuario').click(function() {

        var nombre = $('#nombre').val();
        var cedula = $('#cedula').val();
        var telefono = $('#telefono').val();

        agregarUsuario(nombre, cedula, telefono);
    });

    $('#editarUsuario').click(function() {
        editarUsuario();
    });
});

function agregarUsuario(nombre, cedula, telefono) {

    var parametros = {
        nombre: nombre,
        cedula: cedula,
        telefono: telefono
    };    

    $.ajax({
        type: 'POST',
        url: 'services/agregarUsuario.php',
        data: parametros,
        success: function(response) {
            if(response == 1) {
                $('#tabla').load('componentes/tabla.php');

                alertify.success('Agregado con exito');
            }else {
                alertify.error('Fallo el servidor');
            }
        }
    });
}

function agregarInfoForm(datos) {
    d = datos.split('||');

    $('#idUsuario').val(d[0]);
    $('#cedulaEdit').val(d[2]);
    $('#nombreEdit').val(d[1]);
    $('#telefonoEdit').val(d[3]);
}

function editarUsuario() {
    var id = $('#idUsuario').val();
    var nombreEdit = $('#nombreEdit').val();
    var cedulaEdit = $('#cedulaEdit').val();
    var telefonoEdit = $('#telefonoEdit').val();

    var parametrosEdit = {
        id: id,
        nombreEdit: nombreEdit,
        cedulaEdit: cedulaEdit,
        telefonoEdit: telefonoEdit
    }; 

    $.ajax({
        type: 'POST',
        url: 'services/editarUsuario.php',
        data: parametrosEdit,
        success: function(response) {
            if(response == 1) {
                $('#tabla').load('componentes/tabla.php');

                alertify.success('Actualizado con exito');
            }else {
                alertify.error('Fallo el servidor');
            }
        }
    });
}

function consultarEliminar(id) {
    alertify.confirm('Eliminar usuario', 'Estas seguro de que deseas eliminar este usuario', 
    function() {  
        eliminarUsuario(id);
    }
    , function() { 
        alertify.error('Se cancelo')
    });
}

function eliminarUsuario(id) {
    var parametrosElim = {
        id: id
    };

    $.ajax({
        type: 'POST',
        url: 'services/eliminarUsuario.php',
        data: parametrosElim,
        success: function(response) {
            if(response == 1) {
                $('#tabla').load('componentes/tabla.php');

                alertify.success('Eliminado con exito');
            }else {
                alertify.error('Fallo el servidor');
            }
        }
    });
}