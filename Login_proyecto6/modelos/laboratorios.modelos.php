<?php
require_once "conexion.php";

class modelosLaboratorios
{
    //TRAER TODOS LOS LABORATORIOS
    public static function mdlMostrarTodosLosLaboratorios($tabla)
    {
        $respuesta = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $respuesta->execute();
        return $respuesta->fetchAll();
        $respuesta->close();
        $respuesta = null; 
    }

    //REGISTRAR LABORATORIO
    public static function mdlRegistrarLaboratorio($tabla, $datos){
        $respuesta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, ubicacion, responsable) VALUES 
        (:nombre, :ubicacion, :responsable)");
        $respuesta->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $respuesta->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
        $respuesta->bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);

        if ($respuesta->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $respuesta->close();
        $respuesta = null;
    }
}