$('#tablaUsuarios').on("click", ".btnEditarUsuario", function(){
    let idUsuario = $(this).attr("idUsuario")
    var datos =  new FormData()
    datos.append("idUsuario", idUsuario)
    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta)
            $("#EingUsuarioR").val(respuesta["matricula"]);
            $("#EingNombre").val(respuesta["nombre"]);
            $("#EingPaterno").val(respuesta["apellido_pa"]);
            $("#EingMaterno").val(respuesta["apellido_ma"]);
            $("#EingCorreo").val(respuesta["correo"]);
            $("#EingNSS").val(respuesta["nss"]);
            $("#Erol").val(respuesta["rol"]);
            $("#EingCarrera").val(respuesta["carrera_idcarrera"]);
            $("#idUsuario").val(respuesta["idusuario"]);
        }

    })
})