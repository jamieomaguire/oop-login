<?php

namespace App\controllers;

use App\model\Authenticate;

class IndexController {
  
  protected $session;

  public function handleLogin($formData, $pdo)
  {
    $username = $formData['username'];
    $password = $formData['password'];

    return Authenticate::fetchUser($username, $password, $pdo);

  }

}