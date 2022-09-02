<div class="border-top">
    <div class="container">
      <footer class="py-3 my-4">
      <img src="<?php echo get_logo(); ?>" alt="<?php echo get_sitename();?>" class="img-fluid" style="width:70px;">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted"><?php echo sprintf('%s %s © Todos los derechos reservados.', get_sitename(), date('Y')); ?></p>
      </footer>
    </div>
</div>

  <!-- inc_bee_footer.php -->
  <?php require_once INCLUDES.'inc_scripts.php'; ?>

    
  </body>
  </html>