<?php
require_once "conexion.php";

class modelosUsuarios
{
    public static function mdlMostrarUsuarios($tabla, $columna, $valor)
    {
        $respuesta = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
        $respuesta->bindParam(":".$columna, $valor, PDO::PARAM_STR);
        $respuesta->execute();
        return $respuesta->fetch();
        $respuesta->close();
        $respuesta = null;
    }
    
    public static function mdlMostrarTodosLosUsuarios($tabla){
        $respuesta = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $respuesta->execute();
        return $respuesta->fetchAll();
        $respuesta->close();
        $respuesta = null;
    }


    public static function mdlRegistroUsuario($tabla, $datos)
    {
        $respuesta = Conexion::conectar()->prepare("INSERT INTO $tabla (matricula, nombre, apellido_pa , apellido_ma, password,
        telefono, nss) VALUES (:matricula, :nombre, :apellido_pa, :apellido_ma, :password, :telefono, :nss )");
        $respuesta->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $respuesta->bindParam(":matricula", $datos["matricula"], PDO::PARAM_STR);
        $respuesta->bindParam(":apellido_pa", $datos["apellido_pa"], PDO::PARAM_STR);
        $respuesta->bindParam(":apellido_ma", $datos["apellido_ma"], PDO::PARAM_STR);
        $respuesta->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $respuesta->bindParam(":nss", $datos["nss"], PDO::PARAM_STR);
        $respuesta->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

        if ($respuesta->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $respuesta->close();
        $respuesta = null;
    }
        public static function mdlMostrarUsuario($tabla, $columna, $valor){
        $respuesta = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
        $respuesta->bindParam(":" . $columna, $valor, PDO::PARAM_STR);
        $respuesta->execute();
        return $respuesta->fetch();
        $respuesta->close();
        $respuesta = null;
    }

    public static function mdlEditarUsuario($tabla, $datos){
        $respuesta = Conexion::conectar()->prepare("UPDATE $tabla SET matricula = :matricula, nombre = :nombre, apellido_pa = :apellido_pa, apellido_ma = :apellido_ma, correo = :correo,
         nss = :nss, rol = :rol, carrera_idcarrera = :carrera WHERE idusuario = :id");
        $respuesta->bindParam(":matricula", $datos["matricula"], PDO::PARAM_STR);
        $respuesta->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $respuesta->bindParam(":apellido_pa", $datos["apellido_pa"], PDO::PARAM_STR);
        $respuesta->bindParam(":apellido_ma", $datos["apellido_ma"], PDO::PARAM_STR);
        $respuesta->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $respuesta->bindParam(":nss", $datos["nss"], PDO::PARAM_STR);
        $respuesta->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);
        $respuesta->bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
        $respuesta->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        if ($respuesta->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $respuesta->close();
        $respuesta = null;
    }
}