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
    <h2>Prestamo</h2>
    <form action="#" method="post">
        <label>Matricula</label>
         <input type="text" name="matricula"><br>
        <label>Nombre</label>
         <input type="text" name="nom"><br>
        <label>Apellidos</label>
         <input type="text" name="ap"><br>
        <label>Fecha</label>
         <input type="date" name="fecha"><br>
        <label>Hora inicio</label>
         <input type="time" name="inicio"><br>
        <label>Hora fin</label>
         <input type="time" name="fin"><br>
        <select name= "Laboratorio">
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
        <select name= "Nombre del quipo">
            <option value="1">equipo1</option>
            <option value="2">equipo2</option>
            <option value="3">equipo3</option>
        </select><br>
            <input type="submit" value="Guardar">
    </form>
</body>