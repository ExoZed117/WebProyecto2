<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
  <!-- Custom Sidebar Style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/custom-sidebar.css">
</head>
<body class="hold-transition login-page">

  <!-- Your content goes here -->

  <nav class="mt-2 custom-sidebar">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link custom-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Inicio
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url().'administracion' ?>" class="nav-link custom-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Administracion
                    <span class="badge badge-info right">15</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url().'cobros' ?>" class="nav-link custom-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Servicios
                    <span class="badge badge-info right">6</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url().'reportes' ?>" class="nav-link custom-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Reportes
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url().'clientes' ?>" class="nav-link custom-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Reporte de Clientes
                </p>
            </a>
        </li>
    </ul>
</nav>

</body>
</html>
