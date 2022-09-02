<?php require_once INCLUDES.'inc_header.php'; ?>

<div class="container py-5">
  <div class="py-5 text-center">
    <a href="<?php echo URL; ?>"><img src="<?php echo get_logo(); ?>" alt="Bee framework" class="img-fluid" style="width: 180px;"></a>
    <h2>Ingresa a tu cuenta</h2>
    <p class="lead">Mira y comparte las fotos de michis que mas te gusten</p>
  </div>

  <div class="row">
    <div class="col-12">
      <?php echo Flasher::flash(); ?>
    </div>

    <!-- formulario -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h4>Ingresa a tu cuenta</h4>
        </div>
        <div class="card-body">
          <form action="login/post_login" method="post" novalidate>
            <?php echo insert_inputs(); ?>
            
            <div class="mb-3 row">
              <div class="col-xl-6">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                <?php if(is_demo()): ?>
                <small class="text-muted">Ingresa bee</small>
                <?php endif; ?>
              </div>
              <div class="col-xl-6">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <?php if(is_demo()): ?>
                <small class="text-muted">Ingresa 123456</small>
                <?php endif; ?>
              </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>

