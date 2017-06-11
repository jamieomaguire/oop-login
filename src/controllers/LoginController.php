<?php

namespace App\controllers;

class LoginController implements PageInterface {
  
  public function load()
  {
    require 'src/views/login.view.php';
  }

}