<?php

namespace App\Model;

class Authenticate {

  protected $pdo;

  protected function __construct() {}

  private function __clone() {}

  private function __wakeup() {}

  public static function fetchUser($username, $password, \PDO $pdo)
  {

    $sql = "SELECT * FROM users WHERE username = :username AND hashed_password = :hased_password LIMIT 1";

    $statement = $pdo->prepare($sql);

    $statement->execute([$username, $password]);

    $fetchedUser = $statement->fetch();

    if ($fetchedUser === false)
    {
      $_SESSION['errors'] = 'Username/Password do not match';
          
      header("Location: index.php");
    }

    $createdUser = UserFactory::create($fetchedUser);

    return static::login($createdUser);

  }

  private static function login(User $fetchedUser)
  {

    $fetchedUser->loggedIn = true;

    unset($_SESSION['errors']);

    return $fetchedUser;
  
  }

  public static function logout(User $fetchedUser)
  {
  
    $fetchedUser->loggedIn = false;

    return $fetchedUser;
  
  }

  public static function findUser($id, $pdo)
  {

    $sql = "SELECT * FROM users WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $statement->execute(['id' => $id]);

    return $statement->fetch(\PDO::FETCH_OBJ);
  
  }
}