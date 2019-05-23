function limpiar() {
    document.getElementById('buscarUsuario').value = '';
}

$(document).ready(function() {
    $('#buscarUsuario').focus();

    $('#buscarUsuario').on('keyup', function() {

        var texto = $('#buscarUsuario').val();

        $.ajax({
            type: 'POST',
            url:  'services/buscarUsuario.php',
            data: {texto: texto},
            beforeSend: function(){
                  $("#tablaUsuario").html("<p align='center'><img src='img/ajaxloader.gif'/></p>");
            },
            error: function(){
                  alert("error petición ajax");
            },
            success: function(response) {
                  $("#tablaUsuario").html(response);
            }
        });
    });
});