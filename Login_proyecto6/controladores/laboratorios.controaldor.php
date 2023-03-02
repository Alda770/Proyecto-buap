<?php
/* */
class controladorLaboratorios
{    
    public static function ctrMostrarTodosLosLaboratorios(){
        $tabla = "laboratorio";
        $respuesta = modelosLaboratorios::mdlMostrarTodosLosLaboratorios($tabla);
        return $respuesta;
    }

    public static function ctrRegistrarLaboratorio(){
        if (isset($_POST["labNombre"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["labNombre"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["labUbicacion"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["labResponsable"])){
                
                $tabla = "laboratorio";
                $datos = array("nombre" =>$_POST["labNombre"],
                                "ubicacion" =>$_POST["labUbicacion"],
                                "responsable" =>$_POST["labResponsable"]);
                                

                $respuesta = modelosLaboratorios::mdlRegistrarLaboratorio($tabla, $datos);
                if ($respuesta == "ok") {
                    echo "<script>
                            Swal.fire({
                              type: 'success',
                              title: '¡Perfecto!',
                              text: '¡El laboratorio ha sido creado correctamente!',
                              showConfirmButton: true,
                              confirmButtonText: 'OK'
                            }).then((result) => {
                                window.location ='laboratorios';
                            });
                            </script>";
                }


            }else{
                echo "<script>
                        Swal.fire({
                          type: 'error',
                          title: '¡Error!',
                          text: '¡El dato no puede ir vacío o llevar caracteres especiales!',
                          showConfirmButton: true,
                          confirmButtonText: 'OK'
                        }).then((result) => {
                            window.location ='laboratorios';
                        });
                        </script>";
            }

        }

    }
}