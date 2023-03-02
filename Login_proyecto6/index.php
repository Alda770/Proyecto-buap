<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/laboratorios.controaldor.php";

require_once "modelos/usuarios.modelos.php";
require_once "modelos/laboratorios.modelos.php";

$plantilla =  new controladorPlantilla();
$plantilla->plantilla();