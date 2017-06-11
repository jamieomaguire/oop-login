<?php

namespace App\core;

use App\model\User;

class Session {

  protected $loggedUser;

  public function __construct()
  {

    session_start();

    if (isset($_SESSION['loggedUser']))
    {

      $this->loggedUser = $_SESSION['loggedUser'];

      return $this;

    }

    $this->loggedUser = null;
  }

  public function setloggedUser(User $user)
  {

    $this->loggedUser = $user;

    $serializedUser = serialize($this->loggedUser);

    $_SESSION['loggedUser'] = $serializedUser;

    return $this;

  }

  public function destroy()
  {
    if ($this->loggedUser)
    {
      $this->loggedUser = null;

      session_destroy();
    }
  }

}