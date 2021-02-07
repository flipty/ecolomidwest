<?php
//temporary cache buster
header("Cache-Control: max-age=0, private, no-cache, no-store");
$ts = time();
include('includes/hours.php');
?>
<!DOCTYPE html>
<html <?php if (!$open) { echo 'class="closed"';}?>>
<head>
  <title><?php echo get_the_title();?> | Habanero Tacos Grill - Mexican Food in Minneapolis</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-310x310.png" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/habanero.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">
  <?php if (! is_user_logged_in()){ ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RNPX47SM25"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RNPX47SM25');
  </script>
  <?php }?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php // echo $today; echo $currentTime; if( $open ){ echo ' open';}  if( !$open ){ echo ' closed';} ?>

<div class="messages">
  <span id="closed_reason"><?php echo $close_reason;?><br></span>
  <span id="closed_with_hours">
    We are currently closed. Our hours:<br>
    Sunday: <?php echo $sun_open; ?> - <?php echo $sun_close; ?><br>
    Monday: <?php echo $mon_open; ?> - <?php echo $mon_close; ?><br>
    Tuesday: <?php echo $tues_open; ?> - <?php echo $tues_close; ?><br>
    Wednesday: <?php echo $weds_open; ?> - <?php echo $weds_close; ?><br>
    Thursday: <?php echo $thur_open; ?> - <?php echo $thur_close; ?><br>
    Friday: <?php echo $fri_open; ?> - <?php echo $fri_close; ?><br>
    Saturday: <?php echo $sat_open; ?> - <?php echo $sat_close; ?></p>
  </span>
</div>
<header class="mobile-only">
  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Habenero Tacos Grill"></a>
</header>
<header>
  <div class="container">
    <div class="order-buttons">
      <div id="carryout">
        <a href="/order/" class="button<?php if (!$open) { echo " closed";}?>">ORDER CARRY-OUT<span>No fees or overhead &mdash; helps us thrive!</span></a>
      </div>
      <div id="delivery">
        <a href="#" class="button<?php if (!$open) { echo " closed";} if ($open) { echo " open"; } ?>">ORDER DELIVERY</a>
        <div class="delivery-flyout">
          <h5>Choose from our delivery partners:</h5>
          <div class="options">
            <a href="https://www.grubhub.com/restaurant/habanero-tacos-grill-3223-e-lake-st-minneapolis/1950549" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/grubhub.png" alt="GrubHub"></a>
            <a href="https://www.bitesquad.com/food/habanero-tacos-grill/36529" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bitesquad.png" alt="Bite Squad"></a>
            <a href="https://postmates.com/merchant/habanero-tacos-grill-minneapolis" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/postmates.svg" alt="Postmates"></a>
            <a href="https://www.doordash.com/store/habanero-tacos-grill-minneapolis-680808/en-US" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/doordash.png" alt="Doordash"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<nav class="intro">
  <div class="container">
    <div class="branding">
      <p><?php the_field('left_tagline', 'options');?></p>
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Habenero Tacos Grill"></a>
      <p><?php the_field('right_tagline', 'options');?></p>
    </div>
  </div>
</nav>
