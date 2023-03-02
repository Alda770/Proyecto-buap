<?php
class controladorUsuarios
{

    public static function ctrIngresoUsuario(){
        if (isset($_POST["ingUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST["ingUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]*$/', $_POST["ingPass"])) {
                $tabla = "usuario";
                $columna = "matricula";
                $valor = $_POST["ingUsuario"];
                $respuesta = modelosUsuarios::mdlMostrarUsuarios($tabla, $columna, $valor);
                
                if ($respuesta["matricula"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPass"]){
                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["idusuario"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["usuario"] = $respuesta["matricula"];
                    echo '<script>window.location = "inicio";</script>';
                }else{
                    var_dump($respuesta);
                }
            }    
        }
    }
    //Mostrar tabla de usuarios
    public static function ctrMostrarTodosLosUsuarios(){
      $tabla = "usuario";
      $respuesta = modelosUsuarios::mdlMostrarTodosLosUsuarios($tabla);
      return $respuesta;
    }
    public static function ctrRegistroUsuario(){
        if (isset ($_POST ["ingNombre"])){
            if (
            preg_match ('/^[0-9]*$/', $_POST["ingMatr"]) &&    
            preg_match ('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["ingNombre"]) &&
            preg_match ('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["ingApellidopat"]) &&
            preg_match ('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["ingApellidomat"]) &&
            preg_match('/^[a-zA-Z0-9 ]*$/', $_POST["ingpassword"]&&
            preg_match ('/^[0-9]*$/', $_POST["ingTel"]) &&
            preg_match ('/^[0-9 ]*$/', $_POST["ingNss"])
              )){
                $tabla ="usuario";
                $encriptar =crypt($_POST["ingpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $datos =array ("nombre"=>$_POST["ingNombre"],
                                "apellido_pa"          =>$_POST["ingApellidopat"],
                                "apellido_ma"          =>$_POST["ingApellidomat"],
                                "pass" =>$encriptar,
                                "matricula"          =>$_POST["ingMatr"],
                                "telefono"          =>$_POST["ingTel"],
                                "nss"          =>$_POST["ingNss"],
                                "password"          =>$_POST["ingpassword"],
                                
                                );
                        $respuesta = modelosUsuarios::mdlRegistroUsuario($tabla, $datos);
                        if ($respuesta == "ok") {
                                    echo "<script>
                                            Swal.fire({
                                              type: 'success',
                                              title: '¡Perfecto!',
                                              text: '¡El usuario ha sido creado correctamente!',
                                              showConfirmButton: true,
                                              confirmButtonText: 'OK'
                                            }).then((result) => {
                                                window.location ='login';
                                            });
                                            </script>";
                                }
                
                
                            }else{
                                echo "<script>
                                        Swal.fire({
                                          type: 'error',
                                          title: '¡Error!',
                                          text: '¡El usuario no puede ir vacío o llevar caracteres especiales!',
                                          showConfirmButton: true,
                                          confirmButtonText: 'OK'
                                        }).then((result) => {
                                            window.location ='registro';
                                        });
                                        </script>";
                            }
                
                        }
                
                    }
                
    public static function ctrMostrarUsuario($columna, $valor){
        $tabla="usuario";
        $respuesta=modelosUsuarios::mdlMostrarUsuario($tabla , $columna, $valor);
        return $respuesta;
    }
    
    public static function ctrEdiarUsuario(){
        if(isset($_POST["EingNombre"])){
            $tabla = "usuario";
            $datos = array("matricula" =>$_POST["EingUsuarioR"],
                                "nombre" =>$_POST["EingNombre"],
                                "paterno" =>$_POST["EingPaterno"],
                                "materno" =>$_POST["EingMaterno"],
                                "nss" =>$_POST["EingNSS"],
                                "rol" =>$_POST["Erol"],
                                "carrera"                 => $_POST["EingCarrera"],
                                "id" => $_POST["idUsuario"]);
            $respuesta =  modelosUsuarios::mdlEditarUsuario($tabla, $datos);
            if($respuesta == "ok"){
                echo "<script>
                Swal.fire({
                  type: 'success',
                  title: '¡Perfecto!',
                  text: '¡El usuario ha sido editado correctamente!',
                  showConfirmButton: true,
                  confirmButtonText: 'OK'
                }).then((result) => {
                    window.location ='usuarios';
                });
                </script>";
            }
        }
    }
}
