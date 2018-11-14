<?php require('func/config.php'); ?>

<?php
  $user_email = 'Attache@gmail.com';
  $get = $user->get_user_hash($user_email);
  if ($get) {
    echo $get;
} ?>
