<?php

namespace App\model;

class User {

  protected $properties = [
    'id' => '',
    'username' => '',
    'hashed_password' => '',
    'first_name' => '',
    'last_name' => '',
    'joined' => '',
    'email' => ''
  ];
  // public $id;
  // public $username;
  // protected $hashed_password;
  // protected $first_name;
  // protected $last_name;
  // protected $joined;
  // protected $email;
  public $loggedIn = false;

  public function __construct(array $userAttributes = [])
  {

    // if you don't flip the array, then $allowed_keys will look like:
    // '0' => 'id',
    // '1' => 'username'
    $allowed_keys = array_flip(array_keys($this->properties));

    foreach ($userAttributes as $attribute => $value)
    {

      $this->assignAttribute($allowed_keys, $attribute, $value);
    
    }

  }

  private function assignAttribute($allowed_keys, $attribute, $value)
  {


    if (array_key_exists($attribute, $allowed_keys))
    {
     
           $this->properties[$attribute] = $value;
    
    }

  }

  public function getFullName()
  {
    return ucfirst($this->properties['first_name']) . ' ' . ucfirst($this->properties['last_name']);
  }

  public function getProperty($property)
  {
    if (array_key_exists($property, $this->properties))
    {
      return $this->properties[$property];
    }
  }

  public function formatJoined()
  {
    return date("d/m/Y", strtotime($this->properties['joined']));
  }
}
