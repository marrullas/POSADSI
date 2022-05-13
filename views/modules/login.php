<?php
  require_once "controllers/usuarios.controlador.php";
?>

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>POS</b>ADSI</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresar datos para iniciar Sesión</p>

      <form action="login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre de usuario" name="nombreUsuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
          </div>
          <!-- /.col -->
        </div>
        <?php
          $login =  new ControladorUsuario();
          $login -> ctrIngresoUsuario();
        ?>

      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

