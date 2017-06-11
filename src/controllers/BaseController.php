<?php

namespace App\controllers;

class BaseController {

  public function load(PageInterface $page)
  {
    require 'src/views/partials/head.php';
    $page->load();
    require 'src/views/partials/footer.php';
  }

}