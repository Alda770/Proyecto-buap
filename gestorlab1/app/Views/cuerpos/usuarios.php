<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/fonts-awesome/6.2.0/css/all.css">
    <title>Document Title</title>
</head>
<body>
<div class="w3-container">
   
  <h2>Usuarios de laboratorios</h2><br>
   <a href="<?= base_url('alta_usuarios'); ?>"> Crea un usuario</a><br>
   <h4>Lista de usuarios registrados</h4>
  <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>ID</th>
      <th>Matrícula</th>
      <th>Nombre</th>
      <th>Apellido_pa</th>
      <th>Apellido_ma</th>
      <th>Correo</th>
      <th>Teléfono</th>
      <th>NSS</th>
      <th>Rol</th>
    </tr>
     <?php
       foreach ($datitos as $dato):
     ?>
    <tr>
      <td><?= $dato['idusuario']; ?></td>
      <td><?= $dato['matricula']; ?></td>
      <td><?= $dato['nombre']; ?></td>
      <td><?= $dato['apellido_pa']; ?></td>
      <td><?= $dato['apellido_ma']; ?></td>
      <td><?= $dato['correo']; ?></td>
      <td><?= $dato['telefono']; ?></td>
      <td><?= $dato['nss']; ?></td>
      <td><?= $dato['rol']; ?></td> 
      <td><a href = "<?=base_url('borrar/'.$dato['idusuario']);?>"><i class="fa-solid fa-trash-can"></i></a></td>
      <td><a href="#"><i class="fa-solid fa-pencil"></i></a></td>   
    </tr>
    <?php endforeach; ?>
    </table>
</div>

</body>
</body>
</html>