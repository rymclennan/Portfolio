<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
</head>


<body <?php body_class(); ?>>
    <header id="home">
     <div class="header-container">
        <div class="title-page-flex-container">
            <h1>
              <a href="#main""<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display'); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            </h1>
            <p><a href="#main">Front End Developer</a></p>
        </div><!-- flex-container -->
      </div>
    </header><!--/header-->



<!-- commented out the nav. all it said was 'home'. i love wordpress.
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?> -->


