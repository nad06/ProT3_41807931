<section class="conteiner mt-5 d-flex justify-content-center" id="registro">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Registro de Cliente</h2>

                <?php $validation = \Config\Services::validation(); ?>

                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group mb-3">
                        <label for="correo">Email:</label>
                        <input type="email" class="form-control" id="correo" placeholder="ejemplo@correo.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>

                    <!-- VER como agrego y que agrego a la base de datos
                    <div class="form-group mb-3">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="1234567890">
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="inputDate">
                    </div>
                    <div class="row mb-3">
                        <label for="inputCountry" class="form-label">Pais</label>
                        <input type="text" class="form-control" id="inputCountry">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Provincia</label>
                        <select id="inputCity" class="form-select">
                            <option selected>Elige...</option>
                            <option>Corrientes</option>
                            <option>Resistencia</option>
                            <option>Misiones</option>
                            <option>Cordoba</option>
                            <option>Buenos Aires</option>
                            <option>Santa Fe</option>
                            <option>Formosa</option>
                            <option>EntreRios</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <label for="inputCity" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputZip" class="form-label">Código postal</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    -->

                    <!--
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    -->

                    <input type="submit" value="Registrar" class="btn btn-success">
                    <input type="submit" value="Cancelar" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

</section>

