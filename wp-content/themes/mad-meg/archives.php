<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title() ?></h1>
				<div class="entry-content">
					<?php the_content(); ?>
					<ul id="archives-page">
						<li id="category-archives">
							<h3><?php _e('Archives by Category', 'madmeg') ?></h3>
							<ul><?php wp_list_categories('optioncount=1&feed=RSS&title_li=&show_count=1') ?></ul>
						</li>
						<li id="monthly-archives">
							<h3><?php _e('Archives by Month', 'madmeg') ?></h3>
							<ul><?php wp_get_archives('type=monthly&show_post_count=1') ?></ul>
						</li>
					</ul>
					<?php edit_post_link(__('Edit', 'madmeg'),'<span class="edit-link">','</span>') ?>
				</div>
			</div>
			<?php comments_template(); ?>
			<div class="clearboth"></div>
		</div>
	</div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
