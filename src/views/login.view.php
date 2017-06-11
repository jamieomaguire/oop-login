  <div class="page login-page">
    <?php if (isset($_SESSION['errors'])) : ?>
      <h3><?= $_SESSION['errors']; ?></h3>
    <?php endif; ?>
    <form class="log-in-form" action="index.php" method="post">
      <p><input type="text" name="username" placeholder="Username" /></p>
      <p><input type="password" name="password" placeholder="Password" /></p>
      <button class="log-in-btn" type="submit" name="submit">Log In</button>
    </form>
  </div>
