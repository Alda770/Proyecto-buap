<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>
<body><center>
    <?php
     //foreach($result as $key => $r){
       // echo $nombre;
     //}
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<title>Capacitacion</title>
</head>
<body>
        <div class="container">
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <h2><center>Registro de capacitación</h2>
    <form action="<?php echo base_url('/alta_capacitacion')?>" method="POST">
    <form action="#" method="post">
        <label>Nombre</label>
        <input type="text" name="nom"><br>
        <label>Apellidos</label>
        <input type="text" name="ap"><br>
        <label>Correo</label>
        <input type="email" name="mail"><br>
        <label>Telefono</label>
        <input type="telefono" name="tel"><br>
        <label>Carrera</label>
        <select name= "carrera">
            <option value="1">ISTII</option>
            <option value="2">IPGI</option>
            <option value="3">IAA</option>
        </select><br>
        <select name= "capacitación">
            <option value="3">Seguridad Industrial 1</option>
            <option value="4">Hidráulica</option>
            <option value="5">Neumática</option>
            <option value="6">Metrología Dimensional</option>
            <option value="7">Metrología Eléctrica</option>
            <option value="8">Herramientas Manuales</option>
            <option value="9">Maquinas Convencionales</option>
            <option value="10">Soldadura</option>
            <option value="11">Prototipado</option>
            <option value="12">Equipos De Medición Eléctrica</option>
            <option value="13">Prototipado Digital</option>
        </select><br>
        <label>Rol</label>
        <select name= "rol">
            <option value="1">Estudiante</option>
            <option value="2">Docente</option>
            <option value="3">Administrador</option>
            </select><br>
            <input type="submit" value="Guardar">
    </form>
</body>