<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo get_the_title();?></title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/ecolo.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<?php wp_nav_menu( array( 'menu' => 'Header Menu', 'menu_class' => 'header-nav', 'container' => 'nav' ) ); ?>
</header>
