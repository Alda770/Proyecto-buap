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
        <h2><center>Equipos</h2>
    <form action="<?php echo base_url('/alta_capacitacion')?>" method="POST">
    <form action="#" method="post">
    <select name= "Nombre del quipo">
            <option value="1">equipo1</option>
            <option value="2">equipo2</option>
            <option value="3">equipo3</option>
        </select><br>
        <select name= "Marca">
            <option value="1">marca1</option>
            <option value="2">marca2</option>
            <option value="3">marca3</option>
        </select><br>
        <select name= "Modelo">
            <option value="1">modelo1</option>
            <option value="2">modelo2</option>
            <option value="3">modelo3</option>
        </select><br>
        <select name= "Description">
            <option value="1">ISTII</option>
            <option value="2">IPGI</option>
            <option value="3">IAA</option>
        </select><br>
        <select name= "Laboratorios">
            <option value="1">Laboratorio de Redes Automotrices e Industriales</option>
            <option value="2">Laboratorio de Sistemas Digitales y Embebidos</option>
            <option value="3">Laboratorio de Materiales </option>
            <option value="4">Laboratorio de Electricidad y Electrónica </option>
            <option value="5">Laboratorio de Electricidad y Electrónica </option>
            <option value="6">LABORATORIO DE MANUFACTURA</option>
            <option value="7">SISTEMAS DE PRODUCCIÓN INTELIGENTES</option>
            <option value="8">LABORATORIO MÁQUINAS Y MECANISMOS</option>
            <option value="9">LABORATORIO DE MECATRÓNICA</option>
            <option value="10">LABORATORIO DE AUTOMATIZACIÓN INDUSTRIAL</option>
            <option value="11">LABORATORIO DE DISEÑO AUTOMOTRIZ E INDUSTRIAL</option>
            <option value="12">CENTRO DE CÓMPUTO BÁSICO</option>
            <option value="13">LABORATORIO DE SEGURIDAD INFORMÁTICA CÓMPUTO FORE...</option>
            <option value="14">LABORATORIO DE INTERNET DE LAS COSAS</option>
            <option value="16">laboratorio </option>
        </select><br>
        <label>Rol</label>
        <select name= "rol">
            <option value="1">Estudiante</option>
            <option value="2">Docente</option>
            </select><br>
            <input type="submit" value="Guardar">
    </form>
</body>