<h1 class="h3 mb-2 text-gray-800">Tabla de usuarios</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered tablaUsuarios" id="tablaUsuarios" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Telefono</th>
                        <th>NSS</th>
                        <th>Rol</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $usuarios = controladorUsuarios::ctrMostrarTodosLosUsuarios();
                     foreach ($usuarios as $key => $value){
                        echo '
                            <tr>
                                <td>'.($key + 1).'</td>
                                <td>'.$value["matricula"].'</td>
                                <td>'.$value["nombre"].'</td>
                                <td>'.$value["apellido_pa"].'</td>
                                <td>'.$value["apellido_ma"].'</td>
                                <td>'.$value["telefono"].'</td>
                                <td>'.$value["nss"].'</td>
                                <td>'.$value["rol"].'</td>
                                <td>
                                <a href="#" class="btn btn-warning btn-circle btnEditarUsuario" idUsuario="'.$value["idusuario"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fas fa-exclamation-triangle"></i></a>
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

<!-- VENTANA PARA EDITAR USUARIO -->
<div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                        id="EingUsuarioR" name="EingUsuarioR"  placeholder="Matricula" required>
                        <input type="hidden" id="idUsuario" name="idUsuario">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="EingNombre" name="EingNombre"  placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="EingPaterno" name="EingPaterno"  placeholder="Apellido" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="EingMaterno" name="EingMaterno"  placeholder="Materno" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                                id="EingCorreo" name="EingCorreo"  placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="EingNSS" name="EingNSS"  placeholder="NSS" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" name="Erol" id="Erol" required>
                                <option>Seleccionar</option>
                                <option value="Alumno">Alumno</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" name="EingCarrera" id="EingCarrera" required>
                                <option>Seleccionar Tipo De Carrera</option>
                                <option value="1">Ingeniería en sistemas y tecnología de la información industrial</option>
                                <option value="2">Ingeniería en automatización y autotronica</option>
                                <option value="3">Ingeniería en procesos y gestión industrial</option>
                            </select>
                        </div>             
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
            <?php
              $editarUsuario = new controladorUsuarios();
              $editarUsuario->              $editarUsuario->ctrEdiarUsuario();
            ?>
            </form>
        </div>
    </div>
</div>