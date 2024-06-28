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
                    <h1>Editar Pago</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar Pago</li>
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
                <form action="<?php echo base_url().'cobros/update/'.$pago['idPago']; ?>" method="post">
                    <div class="form-group">
                        <label for="tipoPago">Tipo Pago</label>
                        <input type="text" class="form-control" name="tipoPago" id="tipoPago" value="<?php echo $pago['tipoPago']; ?>" placeholder="Tipo Pago">
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="text" class="form-control" name="monto" id="monto" value="<?php echo $pago['monto']; ?>" placeholder="Monto (Bs)">
                    </div>
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="text" class="form-control" name="descuento" id="descuento" value="<?php echo $pago['descuento']; ?>" placeholder="Descuento (Bs)">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $pago['fecha']; ?>" placeholder="mm/dd/aaaa">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción"><?php echo $pago['descripcion']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="idUsuarioPago">Cliente</label>
                        <select class="form-control" name="idUsuarioPago" id="idUsuarioPago">
                            <option value="">--Elegir Cliente--</option>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente['idUsuario'] ?>" <?= $pago['idUsuarioPago'] == $cliente['idUsuario'] ? 'selected' : ''; ?>><?= $cliente['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Pago</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
