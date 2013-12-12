<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Silvercup Properties
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css?' . filemtime( get_stylesheet_directory() . '/css/main.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/normalize.css?' . filemtime( get_stylesheet_directory() . '/css/normalize.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footable-0.1.css?' . filemtime( get_stylesheet_directory() . '/css/footable-0.1.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footable.sortable-0.1.css?' . filemtime( get_stylesheet_directory() . '/css/footable.sortable-0.1.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/layout.css?' . filemtime( get_stylesheet_directory() . '/css/layout.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/skeleton.css?' . filemtime( get_stylesheet_directory() . '/css/skeleton.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/flexslider.css?' . filemtime( get_stylesheet_directory() . '/css/flexslider.css'); ?>" type="text/css"  />
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/js/jquery.flexslider-min.js?' . filemtime( get_stylesheet_directory() . '/js/jquery.flexslider-min.js'); ?>" type="text/css"  />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header>
		<div class="container">
		<div class="sixteen columns clearfix">
		
	            <?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="header_img" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
		<?php endif; // End header image check. ?>	
				
			<h1 class="remove-botton"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">KirillCup</a></h1>
			<h5 class="site-description">properties</h5>
		</div>
		</div>
		</header>
		<div class="mainnav">
        <!--<div id="navbar" class"navbar">-->
		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'silvercupproperties' ); ?></h3>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<!--</div>-->	<!-- #masthead -->
</div>