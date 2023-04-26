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
    <h2>Capacitación</h2>
    <form action="#" method="post">
        <label>Matricula</label>
         <input type="text" name="matricula"><br>
        <label>Nombre</label>
         <input type="text" name="nom"><br>
        <label>Apellidos</label>
         <input type="text" name="ap"><br>
        <label>Fecha de inicio</label>
         <input type="date" name="fecha"><br>
        <label>Fecha de fin</label>
         <input type="date" name="fecha"><br>
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
         <select name= "Estatus">
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select><br>
        <input type="submit" value="Guardar">
        </form>
</body>
