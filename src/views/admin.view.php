<div class="page admin-page">

  <?php if (isset($_SESSION['loggedUser'])) : ?>

    <?php $loggedUser = unserialize($_SESSION['loggedUser']); ?>

    <h2><?= "Welcome back, " . ucfirst($loggedUser->getProperty('username')) . "!"; ?></h2>
  
  <?php else : ?>
    
    <h2>Welcome, please log in.</h2>
  
  <?php endif; ?>

  <hr />
  <h3>About Your Account</h3>

  <p>Name: <?= $loggedUser->getFullName(); ?></p>
  <p>Email Address: <?= $loggedUser->getProperty('email'); ?></p>
  <p>Joined: <?= $loggedUser->formatJoined(); ?></p>

  <!--<?php

    $serialized = $_SESSION['loggedUser'];
    echo "Encoded :";
    var_dump( $serialized);

    $unserialized = unserialize($serialized);
    echo "Decoded: ";
    var_dump($unserialized);
  
  ?>-->
</div>