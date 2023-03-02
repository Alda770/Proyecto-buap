<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Proyecto</title>
    <link href="vistas/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="vistas/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>

<body class="bg-gradient-info">
<?php
if (isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] == "ok"){
    echo '<div id="wrapper">';
        include "modulos/pagina/menu.php";
        echo '<div class="container-fluid">';

        if(isset($_GET["ruta"])){
            if($_GET["ruta"] == "inicio" ||
               $_GET["ruta"] == "salir" ||
               $_GET["ruta"] == "registroAdmin" ||
               $_GET["ruta"] == "laboratorios" ||
               $_GET["ruta"] == "usuarios"){
                include "modulos/".$_GET["ruta"].".php";
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    echo '</div>';
}
else{
    if($_GET["ruta"] == "registro"){
        echo '<body>';
        include "modulos/registro.php";
    }else{
        echo '<body>';
        include "modulos/login.php";
    }
    
}
?>

<script src="vistas/js/jquery.min.js"></script>
    <script src="vistas/js/bootstrap.bundle.min.js"></script>
    <script src="vistas/js/jquery.easing.min.js"></script>
    <script src="vistas/js/sb-admin-2.min.js"></script>
    <script src="vistas/js/validar.js"></script>
    <script src="vistas/js/usuarios.js"></script>
</body>

</html>