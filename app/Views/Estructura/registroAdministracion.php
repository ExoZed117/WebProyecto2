<?php include 'header.php'; ?>

<!-- Sidebar Menu -->
<?php include 'sidebarmenu.php'; ?>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" id="alertTemporal">
                    <?php if(isset($mensaje)){?>
                        <div class="alert alert-<?= $tipo; ?>" role="alert">
                            <strong>Insercion Exitosa</strong> <?= $mensaje; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8">
                <form action="<?php echo base_url().'insertAdministracion'?>" method="post">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apePat" id="apePat" placeholder="Apellido Paterno">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" class="form-control" name="apeMat" id="apeMat" placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="passw" id="passw" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tipo de Membresía</label>
                                <select class="form-control" name="rol" id="rol">
                                    <option value="Admin">Silver</option>
                                    <option value="Empleado">Gold</option>
                                    <option value="Cliente">Vip</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telefono Celular</label>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Clase</label>
                                <select class="form-control" name="tipoAccion" id="tipoAccion">
                                    <?php foreach ($materias as $materia): ?>
                                        <option value="<?= $materia['id'] ?>"><?= $materia['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Costo</label>
                                <input type="text" class="form-control" name="costo" id="costo" placeholder="Costo">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Estatura(cm)</label>
                                <input type="text" class="form-control" name="nroEstatura" id="nroEstatura" placeholder="Nro Estatura">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Direccion</label>
                        <textarea class="form-control" name="direccion" id="direccion" rows="3" placeholder="Direccion de cliente"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                </form>    
            </div>
            <div class="col-3"></div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
