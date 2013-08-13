<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<title><?php bloginfo('name'); if (is_404()) : _e(' &raquo; Not Found', 'madmeg'); elseif (is_front_page() || is_home()) : echo ' &raquo; '; bloginfo('description'); else : wp_title(); endif; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo esc_html(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'madmeg'); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo esc_html(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'madmeg'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php
			if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
			wp_head();
		?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<div id="header">
				<?php get_sidebar('header'); ?>
				<h1><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></h1>
				<h2><?php bloginfo('description') ?></h2>
				<div id="access">
					<div class="skip-link screen-reader-text">
						<a href="#content" title="<?php esc_attr_e('Skip to content', 'madmeg'); ?>"><?php _e('Skip to content', 'madmeg'); ?></a>
					</div>
					<?php wp_nav_menu(array('container_class' => 'menu', 'theme_location' => 'primary')); ?>
				</div>
			</div>
