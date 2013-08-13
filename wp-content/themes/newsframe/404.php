<?php get_header(); ?>
	<div class="row">
	<div class="nine columns">
		<div id="404-page">
		<article id="post-0" class="post error404 no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( '404 - Oops. Page Not Found', 'newsframe' ); ?></h1>
			</header>
		<div class="entry-content">
			<p><?php _e( 'Hi. Your local 404 error page here. Sorry we had to meet. Maybe you can find what you want below.', 'newsframe' ); ?></p>
			<h2><?php _e('Pages' , 'newsframe'); ?></h2>
			<ul>
				<?php
				// Add pages you'd like to exclude in the exclude here
				wp_list_pages(
				array(
				'exclude' => '',
				'title_li' => '',
				)
				);
				?>
			</ul>
		</div><!-- .entry-content -->
		</article><!-- #post-0 -->
	</div>
	</div>
<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
