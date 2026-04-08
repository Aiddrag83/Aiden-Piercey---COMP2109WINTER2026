<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="logo">Brasshaven</div>
  <nav>
    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
  </nav>
</header>