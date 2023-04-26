<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorios BUAP</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #042243;
        }
        .navbar {
  height: 80px;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
}
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #005fa5;
            font-weight: bold;
        }
        .container {
            margin-top: 40px;
        }
        img {
            max-height: 70px;
            margin: 20px;
        }
    /* Estilos para el formulario */
    form {
        background-color: #f7f7f7;
        border-radius: 10px;
        padding: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"], select {
        margin-bottom: 10px;
    }
    input[type="submit"] {
        background-color: #005fa5;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    input[type="submit"]:hover {
        background-color: #042243;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-custom navbar-dark">
     <!-- Enlaces de navegación -->
     <a class="navbar-brand" href="#"><img src="https://autoserviciobuap.mx/wp-content/uploads/LOGO-BUAP.jpg" width="130" height="60" alt="Logo BUAP"></a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>    
    </ul>
  </div> 
</nav>
            <div class="col-sm-8">
                <h2 class="text-center">Laboratorios BUAP</h2>
            </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="<?php echo base_url('/laboratorio')?>" method="POST">
                    <select name="Laboratorios" class="form-control">
                        <option value="1">Laboratorio de Redes Automotrices e Industriales</option>
                        <option value="2">Laboratorio de Sistemas Digitales y Embebidos</option>
                        <option value="3">Laboratorio de Materiales</option>
                        <option value="4">Laboratorio de Electricidad y Electrónica</option>
                        <option value="5">Laboratorio de Control y Automatización</option>
                        <option value="6">Laboratorio de Manufactura</option>
                        <option value="7">Sistemas de Producción Inteligentes</option>
                        <option value="8">Laboratorio Máquinas y Mecanismos</option>
                        <option value="9">Laboratorio de Mecatrónica</option>
                        <option value="10">Laboratorio de Automatización Industrial</option>
                        <option value="11">Laboratorio de Diseño Automotriz e Industrial</option>
                        <option value="12">Centro de Cómputo Básico</option>
                        <option value="13">Laboratorio de Seguridad Informática y Cómputo Forense</option>
                        <option value="14">Laboratorio de Internet de las Cosas</option>
                        <option value="15">Laboratorio de Inteligencia Artificial</option>
                        <option value="16">Laboratorio</option>
        </select><br>
        <select name= "Ubicación">
            <option value="1">Chiapa 1</option>
            <option value="2">Chiapa 2</option>
        </select><br>
        <label>Nombre del responsable</label>
        <input type="text" name="responsable"><br>
            <input type="submit" value="Guardar">
    </form>
</body>