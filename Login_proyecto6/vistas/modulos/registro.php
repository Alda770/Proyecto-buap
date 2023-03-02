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
                                        <h1 class="h4 text-gray-900 mb-4">Registrate</h1>
                                    </div>
                                    <form class="user" method="POST" onsubmit="return validarRegistro()">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingMatr" name="ingMatr" placeholder="Ingresa tu Matricula" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingNombre" name="ingNombre" placeholder="Ingresa tu Nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingApellidopat" name="ingApellidopat" placeholder="Ingresa tu Apellido Paterno" required>
                                        </div>                                 
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingApellidomat" name="ingApellidomat" placeholder="Ingresa tu Apellido Materno" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="ingpassword" name="ingpassword" placeholder="Ingresa tu contraseña" required>
</div>                               
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingTel" name="ingTel" placeholder="Ingresa tu Telefono" required>
                                        </div>                               
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingNss" name="ingNss" placeholder="Ingresa tu NSS" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ingsed" name="ingSed" placeholder="Ingresa tu sede" required>
                                        </div>
                                        
                                        <?php
                                        $registro = new controladorUsuarios();
                                        $registro->ctrRegistroUsuario();
                                        ?>
                                        <button class="btn btn-primary btn-user btn-block">Registrate</button>
                                        <br>
                                        <a href = "login">Iniciar Sesion</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>