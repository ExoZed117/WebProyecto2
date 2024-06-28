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
                    <h1>Lista de Pagos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Lista de Pagos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pagos Registrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo de Pago</th>
                                    <th>Monto</th>
                                    <th>Descuento</th>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th>Cliente</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pagos as $pago): ?>
                                    <tr>
                                        <td><?php echo $pago['tipoPago']; ?></td>
                                        <td><?php echo $pago['monto']; ?></td>
                                        <td><?php echo $pago['descuento']; ?></td>
                                        <td><?php echo $pago['fecha']; ?></td>
                                        <td><?php echo $pago['descripcion']; ?></td>
                                        <td><?php echo $pago['nombreCliente']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('cobros/edit/'.$pago['idPago']); ?>" class="btn btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                                            <a href="<?php echo base_url('cobros/delete/'.$pago['idPago']); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este pago?');"><i class="nav-icon fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tipo de Pago</th>
                                    <th>Monto</th>
                                    <th>Descuento</th>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th>Cliente</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
