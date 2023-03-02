<h1 class="h3 mb-2 text-gray-800">Tabla de laboratorios</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <button class="btn btn-danger" data-toggle="modal" data-target="#modalNuevoLab">Nuevo Laboratorio</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered tablaUsuarios" id="tablaLab" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Responsable</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $usuarios = controladorLaboratorios::ctrMostrarTodosLosLaboratorios();
                     foreach ($usuarios as $key => $value){
                        echo '
                            <tr>
                                <td>'.($key + 1).'</td>
                                <td>'.$value["nombre"].'</td>
                                <td>'.$value["ubicacion"].'</td>
                                <td>'.$value["responsable"].'</td>
                                <td>
                                <a href="#" class="btn btn-warning btn-circle btnEditarUsuario" idUsuario="'.$value["idlaboratorio"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fas fa-exclamation-triangle"></i></a>
                                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        ';
                     }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- VENTANA PARA AGREGAR UN NUEVO LABORATORIO -->
<div class="modal fade" id="modalNuevoLab" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO LABORATORIO</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                        id="labNombre" name="labNombre"  placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="labUbicacion" name="labUbicacion"  placeholder="Ubicación" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="labResponsable" name="labResponsable"  placeholder="Responsable" required>
                        </div>             
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="submit">Crear Laboratorio</button>
            </div>
            <?php
              $crearLaboratorio = new controladorLaboratorios();
              $crearLaboratorio->ctrRegistrarLaboratorio();
            ?>
            </form>
        </div>
    </div>
</div>