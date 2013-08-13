<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content">
					<?php the_content() ?>
					<?php wp_link_pages('before=<div class="page-link">' .__('<span>Pages</span>', 'madmeg') . '&after=</div>&pagelink=<em>%</em>') ?>
					<?php edit_post_link(__('Edit', 'madmeg'),'<span class="edit-link">','</span>') ?>
				</div>
			</div>
			<?php comments_template(); ?>
		</div>
	</div>
	<?php get_sidebar() ?>
	</div>
<?php get_footer() ?>