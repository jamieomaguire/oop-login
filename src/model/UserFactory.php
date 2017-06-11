<?php

namespace App\model;

// Takes in an array of attributes
// that are then passed into the User constructer
// there they will be checked before a new User is instantiated
class UserFactory {

  public static function create(array $userAttributes)
  {
    return new User($userAttributes);
  }

}
