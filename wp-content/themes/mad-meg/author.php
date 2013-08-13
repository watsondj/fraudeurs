<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<h2 class="page-title author"><?php printf(__('Author Archives: <span class="vcard">%s</span>', 'madmeg'), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>") ?></h2>
			<div class="archive-meta">
				<?php if (!empty($authordata->user_description)) : echo apply_filters('archive_meta', $authordata->user_description); endif; ?>
			</div>
			<?php rewind_posts(); while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php madmeg_dates(); ?>
					<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'madmeg'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php madmeg_title(get_the_title()); ?></a></h2>
					<div class="entry-author"><?php printf(__('by %s', 'madmeg'), '<a class="url fn n" href="'.get_author_posts_url($authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'madmeg'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></div>
					<div class="entry-content ">
						<?php the_excerpt(''.__('Read More &raquo;', 'madmeg').'') ?>
						<?php wp_link_pages('before=<div class="page-link">' .__('<span>Pages</span>', 'madmeg') . '&after=</div>&pagelink=<em>%</em>') ?>
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