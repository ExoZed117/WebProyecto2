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
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Actualizar Registro</h1>
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
                <form action="<?php echo base_url().'updateRegistro/'.$datos[0]['idUsuario']; ?>" method="post">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $datos[0]['nombre'];?>" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apePat" id="apePat" value="<?= $datos[0]['apellidoPat'];?>" placeholder="Apellido Paterno">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" class="form-control" name="apeMat" id="apeMat" value="<?= $datos[0]['apellidoMat'];?>" placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" value="<?= $datos[0]['usuario'];?>" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" name="passw" id="passw" value="<?= $datos[0]['password'];?>" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Rol</label>
                                <select class="form-control" name="rol" id="rol">
                                    <option value="Admin" <?= $datos[0]['rol'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                                    <option value="Empleado" <?= $datos[0]['rol'] == 'Empleado' ? 'selected' : ''; ?>>Empleado</option>
                                    <option value="Cliente" <?= $datos[0]['rol'] == 'Cliente' ? 'selected' : ''; ?>>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telefono Celular</label>
                                <input type="text" class="form-control" name="celular" id="celular" value="<?= $datos[0]['celular'];?>" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="idMateria">Clase</label>
                                <select class="form-control" name="idMateria" id="idMateria">
                                    <?php foreach ($materias as $materia): ?>
                                        <option value="<?= $materia['id'] ?>" <?= $datos[0]['idMateria'] == $materia['id'] ? 'selected' : ''; ?>><?= $materia['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="costo">Costo</label>
                                <input type="text" class="form-control" name="costo" id="costo" value="<?= isset($datosAccion[0]['costo']) ? $datosAccion[0]['costo'] : ''; ?>" placeholder="Costo">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nroEstatura">Estatura(cm)</label>
                                <input type="text" class="form-control" name="nroEstatura" id="nroEstatura" value="<?= isset($datosAccion[0]['nroEstatura']) ? $datosAccion[0]['nroEstatura'] : ''; ?>" placeholder="Nro Estatura">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <textarea class="form-control" name="direccion" id="direccion" rows="3" placeholder="Direccion de socio"><?= $datos[0]['direccion'];?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
