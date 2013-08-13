<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<?php if ( is_day() ) : ?>
				<h1 class="page-title"><?php printf(__('Daily Archives: <span>%s</span>', 'madmeg'), get_the_time(get_option('date_format'))) ?></h1>
			<?php elseif ( is_month() ) : ?>
				<h1 class="page-title"><?php printf(__('Monthly Archives: <span>%s</span>', 'madmeg'), get_the_time('F Y')) ?></h1>
			<?php elseif ( is_year() ) : ?>
				<h1 class="page-title"><?php printf(__('Yearly Archives: <span>%s</span>', 'madmeg'), get_the_time('Y')) ?></h1>
			<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
				<h1 class="page-title"><?php _e('Blog Archives', 'madmeg') ?></h1>
			<?php endif; ?>
			<?php rewind_posts() ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
					<?php madmeg_dates(); ?>
					<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'madmeg'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php madmeg_title(get_the_title()); ?></a></h2>
					<div class="entry-author"><?php printf(__('by %s', 'madmeg'), '<a class="url fn n" href="'.get_author_posts_url($authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'madmeg'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></div>
					<div class="entry-content">
						<?php the_excerpt(''.__('Read More <span class="meta-nav">&raquo;</span>').'') ?>
					</div>
					<div class="entry-div">
						<?php madmeg_meta(); ?>
					</div>
				</div>
			<?php endwhile ?>
			<?php madmeg_navigation(); ?>
		</div>
	</div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>