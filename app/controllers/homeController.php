<?php 

class homeController extends Controller {
  function __construct()
  {
    parent::auth();
  }

  function index()
  {
    // Flasher::new('Hola mundo!', 'success'); notificacion fija

    $data =
    [
      'title' => 'Inicio',
      'posts' => []
    ];

    View::render('index', $data);
  }
}