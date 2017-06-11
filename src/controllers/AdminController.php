<?php

namespace App\controllers;

class AdminController implements PageInterface {

  public function load()
  {
    require 'src/views/admin.view.php';
  }

}