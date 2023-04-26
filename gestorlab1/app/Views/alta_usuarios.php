
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document Title</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agregar los enlaces a los archivos JS de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .navbar-custom {
            background-color: #042243;
        }
        
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
		}

		h1 {
			color: #333;
			text-align: center;
			margin-top: 50px;
		}

		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #666;
			font-weight: bold;
		}

		input[type="text"], input[type="email"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-custom navbar-dark">
  <!-- Logo -->
  <a class="navbar-brand" href="#"><img src="https://autoserviciobuap.mx/wp-content/uploads/LOGO-BUAP.jpg" width="130" height="60" alt="Logo BUAP"></a>
   <!-- Botón de hamburguesa para dispositivos móviles -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Enlaces de navegación -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="laboratorios">Inicio</a>
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

    <div class="container">
    <h2 class="text-center">Nuevo usuario</h2>
        <form action="<?= base_url('guardar')?>" method="post">
          <div class="form-group">
            <label class="form-label">Matricula</label>
            <input type="text" name="mat"  class="form-control" required><br>
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required><br>
            <label class="form-label">Apellido paterno</label>
            <input type="text" name="apellido_pa" class="form-control" required><br>
            <label class="form-label">Apellido materno</label>
            <input type="text" name="apellido_ma" class="form-control" required><br>
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" required><br>
            <label class="form-label">Telefono</label>
            <input type="telefono" name="telefono" class="form-control" required><br>
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required><br>
         <label class="form-label">Carrera</label>
        <select name= "Id_carrera" class="form-select">
            <option value="1">ISTII</option>
            <option value="2">IPGI</option>
            <option value="3">IAA</option>
        </select><br>
         <label class="form-label">NSS</label>
        <input type="text" name="nss"  class="form-control" requiere><br>
         <label class="form-label">Rol</label>

         <select name= "rol" class="form-select" aria-label="Default select example">
            <option value="1">Estudiante</option>
            <option value="2">Docente</option>
            <option value="3">Administrador</option>
            </select><br>
         
    </div>
    <div class="form group">
        <input type="submit" value="Guardar"class="form-control">
</form>
        </form>
    </div>
</body>
</html>
</form>
</body>
</html> 
