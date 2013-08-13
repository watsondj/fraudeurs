<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<div id="post-0" class="post error404">
				<h1 class="entry-title"><?php _e('Not Found', 'madmeg') ?></h1>
				<div class="entry-content">
					<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'madmeg') ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>