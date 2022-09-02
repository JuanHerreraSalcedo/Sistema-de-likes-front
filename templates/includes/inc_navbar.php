<header class="p-3 bg-dark text-white">
    <div class="border-bottom mb-4">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?php

use Sabberworm\CSS\Value\URL;

 echo URL; ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="<?php echo get_logo(); ?>" alt="<?php echo get_sitename();?>" class="img-fluid" style="width:180px;">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo URL; ?>" class="nav-link px-2 text-secondary">Inicio</a></li>
        </ul>


        <div class="text-end">
            <?php if (!Auth::validate()): ?>
                <a href="login" class="btn btn-outline-primary me-2">Login</a>
            <?php else: ?>
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add_post_modal"><i class="fas fa-plus fa-fw"></i>Agregar post</button>
                <a href="logout" class="btn btn-danger">Salir</a>
            <?php endif; ?>
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button> -->
        </div>
      </div>
    </div>
    </div>

  </header>