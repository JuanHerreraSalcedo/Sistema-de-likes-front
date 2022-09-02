<?php require_once INCLUDES . 'inc_header.php'; ?>
<?php require_once INCLUDES . 'inc_navbar.php'; ?>

<div class="container py-5">
    <div class="row">
        <div class="col">
            <?php echo Flasher::flash(); ?>
        </div>
    </div>

    <?php if (empty($d->posts)) : ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card h-100 post_card">
                    <!-- Información del autor -->
                    <div class="post_data">
                        <span class="text-muted">
                            por <b>Sara Doe</b>
                        </span>
                    </div>

                    <!-- Borrado de post propio -->
                    <div class="post-trash pointer" data-id="123" data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar post">
                        <i class="fas fa-trash text-danger"></i>
                    </div>

                    <!-- Imagen -->
                    <div class="post_image pointer" data-id="123">
                        <div class="post_image_overlay"></div>
                        <img src="<?php echo get_image('123'); ?>" alt="Sara Doe">
                    </div>

                    <!-- Like -->
                    <div class="card-footer">
                        <div class="d-inline" style="position: relative;">
                        <?php if (rand(0,1)==1): ?>
                        <i class="fas fa-heart fa-2x text-danger pointer dislike_post" data-id="123"></i>
                        <?php else: ?>
                        <i class="far fa-heart fa-2x pointer like_post" data-id="123"></i>
                        <?php endif; ?>

                            <!-- Contador -->
                            <span class="badge rounded-pill bg-success likes_count">
                                <span class="likes_text">123</span>
                                <div class="visually-hidden">Me gusta</div>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="row">
            <div class="col py-5 text-center">
                <img src="<?php echo get_image('noposts.png'); ?>" alt="No hay posts">
                <h3 class="mt-3 text-muted">No hay posts</h3>
            </div>
        </div>

    <?php endif; ?>
</div>

<!-- modal -->
<div class="modal fade" id="add_post_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_post_modal_label">Agregar nuevo post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="add_post_form" enctype="multipart/form-data">
            <?php echo insert_inputs(); ?>

            <div class="mb-3">
                <label for="add_post_form_img" class="form-label">Selecciona una imagen para poster</label>
                <input type="file" class="form-control form-control-lg" id="add_post_form_img" name="image">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success add_post_submit">Agregar post</button>
      </div>
    </div>
  </div>
</div>
<?php require_once INCLUDES . 'inc_footer.php'; ?>