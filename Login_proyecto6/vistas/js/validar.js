function validarIngreso(){
    let usuario = $("#ingUsuario").val()
    if (usuario != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(usuario)){
            $("#ingUsuario").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingUsuario").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let pass = $("#ingPass").val()
    if (pass != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(pass)){
            $("#ingPass").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingPass").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    return true
}


//////////REGISTRO

function validarRegistro(){
    let nombre = $("#ingNombre").val()
    if (nombre != ""){
        let expresion = /^[a-zA-Z0-9 ]*$/
        if(!expresion.test(nombre)){
            $("#ingNombre").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales_______</div></div></div>')
            return false
        }
    }
    else{
        $("#ingNombre").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let usuario = $("#ingUsuarioR").val()
    if (usuario != ""){
        let expresion = /^[a-zA-Z0-9 ]*$/
        if(!expresion.test(usuario)){
            $("#ingUsuarioR").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales-----</div></div></div>')
            return false
        }
    }
    else{
        $("#ingUsuarioR").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let pass = $("#ingPassword").val()
    if (pass != ""){
        let expresion = /^[a-zA-Z0-9 ]*$/
        if(!expresion.test(pass)){
            $("#ingPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    return true
}