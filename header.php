<?php
/**
 * Simple's header template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="masthead" class="site-header" role="banner">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </header><!-- .site-header -->

<?php
  // Only display markup if the menu exists
  if ( has_nav_menu( 'primary' ) ) : ?>

    <nav id="nav" class="site-navigation" role="navigation">
      <button id="navButton" class="button button-navigation">
        <!--<i class="fa fa-bars fa-fw"></i>-->
        <i class="dashicons dashicons-menu"></i>
        <span class="screen-reader-text">Menu</span>
      </button>
      <button  id="navClose" class="button button-navigation button-close">
        <!--<i class="fa fa-times fa-fw"></i>-->
        <i class="dashicons dashicons-no"></i>
        <span class="screen-reader-text">Menu</span>
      </button>

      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container' => 'false',
          'menu_class' => 'nav navbar-nav'
        ) );
      ?>
    </nav>

  <?php endif; ?>

  <main id="primary" class="site-main" role="main">
