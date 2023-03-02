
<?php
/*Este apartado del codigo es para poder agregar usuarios desde nuestra 
 interfaz, dejandonos acceder a nuestra base de datos*/
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelos.php";

class AjaxUsuarios{
    //ediatar usuario
    public $idUsuario;
    public function ajaxEditarUsuario(){
        $columna = "idusuario";
        $valor = $this->idUsuario;
        $respuesta =  controladorUsuarios::ctrMostrarUsuario($columna, $valor);
        echo json_encode($respuesta);
    }
}

if(isset($_POST["idUsuario"])){
    $editar =  new AjaxUsuarios();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();
}