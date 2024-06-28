<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gimnasio GYM | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css">
</head>
<body>
<div id="form">
  <div id="form-body">
    <div id="welcome-lines">
      <div id="welcome-line-1">Gimnasio GYM</div>
      <div id="welcome-line-2">Ingrese al sistema</div>
    </div>
    <div id="input-area">
      <form action="<?php echo base_url().'validar'?>" method="post">
        <div class="form-inp">
          <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        </div>
        <div class="form-inp">
          <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div id="submit-button-cvr">
          <button type="submit" id="submit-button">Ingresar</button>
        </div>
      </form>
    </div>
    <div id="forgot-pass">
      <a href="#">¿Olvidó su contraseña?</a>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
