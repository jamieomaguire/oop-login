<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

// Use classes
use App\core\Database;
use App\core\Session;
use App\model\User;
use App\model\UserFactory;
use App\model\Authenticate;
use App\controllers\BaseController;
use App\controllers\IndexController;
use App\controllers\LoginController;
use App\controllers\adminController;

// Instantiate database
$pdo = Database::getInstance($config);

// Start a new session for storing logged in user
$session = new Session;

// BaseController loads partial view files around
// main views
$baseController = new BaseController;

// Currently this just handles the log in form
$indexController = new IndexController;

// Login form view
$loginController = new LoginController;

// Admin view
$adminController = new AdminController;

// When the form is submitted, the 
if (isset($_POST['submit']))
{

  $foundUser = $indexController->handleLogin($_POST, $pdo);

  $session->setLoggedUser($foundUser);
 
  header('Location: index.php?page=admin');
  
}

if (isset($_GET['page']) && $_GET['page'] === 'admin')
{
  $baseController->load($adminController);
} else
{
  // Render the log in form
  $baseController->load($loginController);
}


if (isset($_POST['logout']))
{

  $session->destroy();

  header('Location: index.php');

}

// Close database connection
$pdo = null;

