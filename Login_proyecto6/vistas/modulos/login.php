<div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenidos</h1>
                                    </div>
                                    <form class="user" method="POST" onsubmit="return validarIngreso()">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingUsuario" name="ingUsuario"  placeholder="Ingresa tu Matricula" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="ingPass" name="ingPass" placeholder="Ingresa tu contraseña" required>
                                        </div>
                                        <?php
                                        $login = new controladorUsuarios();
                                        $login->ctrIngresoUsuario();
                                        ?>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                        <br>
                                        <a href = "registro">Registro</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>