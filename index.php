<?php include './configuration/funtions.php'; ?>
<?php include './includes/header.php'; ?>


    <body class="bg">

          <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
              <div class="login-container">
                  <div class="login-form-container">
                      <div>
                          <div class="card-header pb-0 text-left bg-transparent">
                              <h2 class="font-weight-bolder text-white">Bienvenido</h2>
                                  <p class="mb-0 text-secondary text-white text-xs">Ingresa tu usuario y contraseña para iniciar sesión</p>
                          </div>
                          <div class="card-body">
                              <?= menAlerta();?>
                                  <form role="form" action="login.php" method="POST">
                                    
                                      <label style="color: white; font-weight: bold; font-size: 14px;">Usuario</label>
                                          <div class="mb-3">
                                              <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
                                          </div>
                                      <label style="color: white; font-weight: bold; font-size: 14px;">Contraseña</label>
                                          <div class="mb-3">
                                              <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                                          </div>
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                              <label style="color: white; font-weight: bold; font-size: 14px"> Recordarme</label>
                                          </div>
                                      <div class="text-center">
                                          <button type="submit" class="btn btn-outline-light" name="inicio"><strong>Iniciar sesión</strong></button>
                                      </div>
                                      <p class="mb-4 text-sm mx-auto text-white">
                                    ¿No tienes una cuenta?
                                  <a href="vistas/registro.php" class="text-primary" style="font-weight: bold; font-size: 14px;">Suscríbete</a>
                                </p>
                            </div>
                                  </form>
                            </div>
                        </div>
                  </div>
              </div>
          </main>

      <footer>
          <div>
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-lg-center text-white">
                                    © <script>document.write(new Date().getFullYear())</script>, Derechos reservados
                        </div>
                    </div>
                </div>
          </div>
        </footer>
    </body>

</html>