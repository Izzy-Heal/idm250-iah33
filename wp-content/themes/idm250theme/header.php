<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

        wp_head();

    ?>
    <title><?php wp_title(); ?></title>
</head>

<body>
  <div class="menu_hold">
  <h1>Izzy Heal</h1>
  </div>
<?php
  wp_nav_menu(['theme_location' => 'primary_menu']); ?>





  