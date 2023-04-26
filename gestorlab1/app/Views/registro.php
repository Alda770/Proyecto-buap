<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <title><p class="text-center">Registro de usuarios</></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
</head>
<body>
    <div clas="container">
    <form action="#" method="post">
    <div class="Col-Xs-5">
         <label class="form-label">Matricula</label>
        <input type="text" name="matricula"  class="form-control" requiere><br>
        <label class="form-label">Nombre</label>
        <input type="text" name="nom"   class="form-control" requiere><br>
         <label class="form-label">Apellidos</label>
        <input type="text" name="ap"  class="form-control" requiere><br>
         <label class="form-label">Correo</label>
        <input type="email" name="mail"  class="form-control" requiere><br>
         <label class="form-label">Telefono</label>
        <input type="telefono" name="tel"  class="form-control" requiere><br>
         <label class="form-label">Contraseña</label>
        <input type="password" name="pass"  class="form-control" requiere><br>
         <label class="form-label">Carrera</label>
        <select name= "carrera" class="form-select">
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
         <input type="submit" value="Guardar"  class="form-control">
    </div>
    </form>
    </div>
</body>
