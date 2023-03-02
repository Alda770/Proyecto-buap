<h1 class="h3 mb-2 text-gray-800">Registro</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Registrar nuevo usuario</h6>
    </div>
    <div class="card-body">
        <form class="user" method="POST" onsubmit="return validarRegistro()">
        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingMatricula" name="ingMatricula"  placeholder="Matricula" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingNombre" name="ingNombre"  placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingPaterno" name="ingPaterno"  placeholder="Apellido" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingMaterno" name="ingMaterno"  placeholder="Materno" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="ingPassword" name="ingPassword" placeholder="Contraseña" required>
                                        </div>
                                       <!-- <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="ingCorreo" name="ingCorreo"  placeholder="Correo" required>
                                        </div> -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingNSS" name="ingNSS"  placeholder="NSS" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2" name="ingRol" id="ingRol" required>
                                                <option>Seleccionar</option>
                                                <option value="Alumno">Alumno</option>
                                                <option value="Docente">Docente</option>
                                                <option value="Administrador">Administrador</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2" name="ingCarrera" id="ingCarrera" required>
                                                <option>Seleccionar Tipo De Carrera</option>
                                                <option value="1">Ingeniería en sistemas y tecnología de la información industrial</option>
                                                <option value="2">Ingeniería en automatización y autotronica</option>
                                                <option value="3">Ingeniería en procesos y gestión industrial</option>
                                            </select>
                                        </div>
            <?php
                $registro = new controladorUsuarios();
                $registro->ctrRegistroUsuario();
            ?>
            <button class="btn btn-primary btn-user btn-block">REgistro</button>
        </form>
    </div>
</div>