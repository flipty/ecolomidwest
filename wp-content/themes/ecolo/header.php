<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo get_the_title();?></title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/ecolo.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <a href="<?php echo get_site_url();?>" class="branding">ECOLO <span>midwest</span></a>
    <?php wp_nav_menu( array(
      'menu' => 'Header Menu',
      'menu_class' => 'header-nav',
      'container' => 'nav'
      )); ?>
  </div>
  <div class="nav-trigger mobile-only">
    <a href="#">
      <span class="top"></span>
      <span class="mid"></span>
      <span class="bot"></span>
    </a>
  </div>
</header>
