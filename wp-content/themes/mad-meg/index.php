<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php while ( have_posts() ) : the_post() ?>
				<div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
					<?php if (!in_category(_x('asides', 'asides category slug', 'madmeg'))) : ?>
						<?php madmeg_dates(); ?>
						<h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'madmeg'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php madmeg_title(get_the_title()); ?></a></h1>
						<div class="entry-author"><?php printf(__('by %s', 'madmeg'), '<a class="url fn n" href="'.get_author_posts_url($authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'madmeg'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></div>
					<?php endif ?>
					<div class="entry-content">
						<?php the_content(''.__('Read More &raquo;', 'madmeg').''); ?>
						<?php wp_link_pages('before=<div class="page-link">' .__('<span>Pages</span>', 'madmeg') . '&after=</div>&pagelink=<em>%</em>') ?>
					</div>
					<?php if (!in_category(_x('asides', 'asides category slug', 'madmeg'))) : ?>
						<div class="entry-div">
							<?php madmeg_meta(); ?>
						</div>
					<?php endif ?>
				</div>
				<?php comments_template() ?>
			<?php endwhile ?>
			<?php madmeg_navigation(); ?>
		</div>
	</div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
