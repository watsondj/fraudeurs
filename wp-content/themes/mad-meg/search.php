<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php if (have_posts()) : ?>
				<h1 class="page-title"><?php _e('Search Results for:', 'madmeg') ?> <span id="search-terms"><?php the_search_query() ?></span></h1>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
						<?php madmeg_dates(); ?>
						<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'madmeg'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
						<div class="entry-author"><?php printf(__('by %s', 'madmeg'), '<a class="url fn n" href="'.get_author_posts_url($authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'madmeg'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></div>
						<div class="entry-content">
							<?php the_excerpt(''.__('Read More &raquo;', 'madmeg').'') ?>
						</div>
						<div class="entry-div">
							<?php madmeg_meta(); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php madmeg_navigation(); ?>
			<?php else : ?>
				<div id="post-0" class="post noresults">
					<h1 class="entry-title"><?php _e('Nothing Found', 'madmeg') ?></h1>
					<div class="entry-content">
						<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'madmeg') ?></p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php get_sidebar() ?>
	</div>
<?php get_footer() ?>