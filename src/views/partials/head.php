<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<header>
  <h1 class="site-heading">Chronos</h1>
  <?php if (isset($_SESSION['loggedUser'])) : ?>
    <form action="index.php" method="post">
      <button class="log-out-btn" type="submit" name="logout">Log Out</button>
    </form>
  <?php endif; ?>
</header>
<main>