<?php
$nav_items = array(
  array(
    'href' => 'index.php',
    'title' => 'Home'
  ),
  array(
    'href' => 'index.php#menu',
    'title' => 'Pizzas'
  ),
  array(
    'href' => 'index.php#contact',
    'title' => 'contact us'
  ),
  array(
    'href' => 'sign.php',
    'title' => 'Sign Up/In'
  )
);
if (isset($_SESSION['user'])) {
  $username = $_SESSION['user'];
  $navsign_items = array(
    array(
      'href' => 'index.php',
      'title' => 'Home'
    ),
    array(
      'href' => 'index.php#menu',
      'title' => 'Pizzas'
    ),
    array(
      'href' => 'index.php#contact',
      'title' => 'contact us'
    ),
    array(
      'href' => 'checkout.php',
      'title' => $username
    ),
    array(
      'href' => 'logout.php',
      'title' => 'logout'
    )
  );
}
