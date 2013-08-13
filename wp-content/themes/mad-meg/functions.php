<?php

if (!isset($content_width)) {
	$content_width = 660;
}

add_action('after_setup_theme', 'madmeg_setup');

if (!function_exists('madmeg_setup')) {
	function madmeg_setup() {

	add_editor_style();

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'automatic-feed-links' );

	load_theme_textdomain( 'madmeg', TEMPLATEPATH . '/languages' );

	register_nav_menus(array('primary' => __( 'Primary Navigation', 'madmeg')));

	add_custom_background();

	}
}

function madmeg_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'madmeg' ),
		'id' => 'header-widget-area',
		'description' => __( 'The header widget area', 'madmeg' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'madmeg' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'madmeg' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'madmeg' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'madmeg' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'madmeg_widgets_init' );

function madmeg_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}

add_filter( 'gallery_style', 'madmeg_remove_gallery_css' );

if (!function_exists( 'madmeg_comment')) {
	function madmeg_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		switch ($comment->comment_type) :
			case '' :
		?>
		<li>
			<div <?php comment_class('rounded drop-shadow'); ?>>
				<div id="comment-<?php comment_ID(); ?>">
					<div class="comment-meta commentmetadata">
						<?php printf(__('%1$s at %2$s', 'madmeg'), get_comment_date(),  get_comment_time() ); ?>
						<?php edit_comment_link(__('[ Edit ]', 'madmeg'), ''); ?>
					</div>
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, 40 ); ?>
						<?php printf('<cite>%s</cite>', get_comment_author_link()); ?>
					</div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p><em><?php _e('Your comment is awaiting moderation.', 'madmeg'); ?></em></p>
					<?php endif; ?>
					<div class="comment-body"><?php comment_text(); ?></div>
					<div class="reply">
						<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
					</div>
				</div>
			</div>
		<?php
				break;
			case 'pingback'  :
			case 'trackback' :
		?>
		<li>
			<div class="comment pingback rounded drop-shadow">
				<p><?php _e('Pingback:', 'madmeg'); ?> <?php comment_author_link(); ?><?php edit_comment_link(__('(Edit)', 'madmeg'), ' '); ?></p>
			</div>
		<?php
				break;
		endswitch;
		}
	}

if (!function_exists('madmeg_dates')) {
	function madmeg_dates() {

		?>
			<div class="entry-date">
				<div class="month"><?php the_time('M'); ?></div>
				<div class="day"><?php the_time('d'); ?></div>
				<div class="year"><?php the_time('Y'); ?></div>
			</div>
		<?php
	}
}

if (!function_exists('madmeg_meta')) {
	function madmeg_meta() {

		?>
			<p class="entry-meta">
				<span class="cat-links"><?php printf(__('posted in %s', 'madmeg'), get_the_category_list(', ')) ?></span> |
				<?php the_tags(__('<span class="tag-links">tagged with ', 'madmeg'), ', ', '</span> |') ?>
				<?php edit_post_link(__('Edit', 'madmeg'), '<span class="edit-link">', '</span> |'); ?>
				<span class="comments-link"><?php comments_popup_link(__('No Comments', 'madmeg'), __('Comments (1)', 'madmeg'), __('Comments (%)', 'madmeg')) ?></span>
				</p>
		<?php
	}
}

if (!function_exists('madmeg_navigation')) {
	function madmeg_navigation() {

		?>
			<div class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('&laquo; Previous Posts', 'madmeg')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts &raquo;', 'madmeg')) ?></div>
			</div>
		<?php
	}
}

if (!function_exists('madmeg_title')) {
	function madmeg_title($title) {

		if (empty($title)) {
			_e('Untitled', 'madmeg');
		} else {
			_e($title);
		}
	}
}

?>