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
                    <h1>Registro de Pagos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Registro de Pagos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo base_url().'cobros/store' ?>" method="post">
                    <div class="form-group">
                        <label for="tipoPago">Tipo Pago</label>
                        <input type="text" class="form-control" name="tipoPago" id="tipoPago" placeholder="Tipo Pago">
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="text" class="form-control" name="monto" id="monto" placeholder="Monto (Bs)">
                    </div>
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="text" class="form-control" name="descuento" id="descuento" placeholder="Descuento (Bs)">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="mm/dd/aaaa">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="idUsuarioPago">Cliente</label>
                        <select class="form-control" name="idUsuarioPago" id="idUsuarioPago">
                            <option value="">--Elegir Cliente--</option>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente['idUsuario'] ?>"><?= $cliente['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Cobro</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
