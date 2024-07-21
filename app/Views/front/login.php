
<section id="login">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Iniciar Sesión</h2>

                <!--Mensaje de error -->
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warming">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif;?>

                <!--Inicio formulario de login -->
                <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input name="email" type="email" class="form-control" id="correo" placeholder="ejemplo@correo.com" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input name="pass" type="password" class="form-control" id="contrasena" placeholder="Contraseña" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="recordar">
                        <label class="form-check-label" for="recordar">Recordarme</label>
                    </div>

                    <input type="submit" value="Ingresar" class="btn btn-success">
                    <a href=">?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                    <br><span>¿Aún no se registro? <a href="<?php echo base_url('/registro'); ?>">
                        Registrarse aqui</a>
                    </span>
                    
                    <!--
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn boton-card">Iniciar Sesión</button>
                        <button type="button" class="btn btn-danger boton-cancelar">Cancelar</button>
                    </div>
                    -->
                </form>
            </div>
        </div>
    </div>
</section>