<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php global $newsframe_options; $newsframe_settings = get_option( 'newsframe_options', $newsframe_options ); ?>

	<div class="container">
	<header role="banner">
		<?php if( $newsframe_settings['social_bar'] == true ) { ?>
		<div class="row">
		<div class="twelve columns right">
		<?php get_template_part( 'social' , 'block' ); ?>
		</div>
		</div>
<?php } ?>
	<?php get_search_form(); ?>

	<div class="row">
	<div class="twelve columns">

	<div id="site-title">
	<a href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<?php get_template_part ('logo'); ?>
	</a>
	</div>
	</div>
	</div>

<div class="row">
<div class="twelve columns">

	<h2 id="site-description">
		<?php bloginfo('description'); ?>
	</h2>

<div id="dateline">
	<?php echo date('l, F j, Y'); ?>
</div>
</div>
</div>

<div class="row">
<div class="twelve columns">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h3 class="menu-toggle"><?php _e( 'Menu', 'newsframe' ); ?></h3>
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'newsframe' ); ?>"><?php _e( 'Skip to 			content', 'newsframe' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu') ); ?>
	</nav><!-- #site-navigation -->
</div>
</div>
</header>