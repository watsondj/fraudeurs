<div id="column">
	<div id="primary" class="rounded drop-shadow">
		<div class="sidebar">
			<div id="rss"><a href="<?php bloginfo('rss2_url') ?>" >
				<img src="<?php echo get_template_directory_uri() ?>/images/rss.png" alt="[x]" title="<?php _e('Syndicate this site using RSS', 'madmeg'); ?>" /></a>
			</div>
			<ul>
				<?php if (!dynamic_sidebar('primary-widget-area')) : ?>
					<li id="pages">
						<h3><?php _e('Pages', 'madmeg') ?></h3>
						<ul>
							<?php wp_list_pages('title_li=&sort_column=post_title') ?>
						</ul>
					</li>
					<li id="categories">
						<h3><?php _e('Categories', 'madmeg'); ?></h3>
						<ul>
							<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?>
						</ul>
					</li>
					<li id="archives">
						<h3><?php _e('Archives', 'madmeg') ?></h3>
						<ul>
							<?php wp_get_archives('type=monthly') ?>
						</ul>
					</li>
					<li id="search">
						<h3><label for="s"><?php _e('Search', 'madmeg') ?></label></h3>
						<form id="searchform" method="get" action="<?php echo home_url() ?>">
							<div>
								<input id="s" name="s" class="text-input" type="text" value="<?php the_search_query() ?>" size="10" tabindex="1" accesskey="S" />
								<input id="searchsubmit" class="submit-button" name="searchsubmit" type="submit" value="<?php _e('Find', 'madmeg') ?>" tabindex="2" />
							</div>
						</form>
					</li>
					<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>
					<li id="rss-links">
						<h3><?php _e('RSS Feeds', 'madmeg') ?></h3>
						<ul>
							<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo esc_html(bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'madmeg'); ?>" rel="alternate" type="application/rss+xml"><?php _e('All posts', 'madmeg') ?></a></li>
							<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo esc_html(bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'madmeg'); ?>" rel="alternate" type="application/rss+xml"><?php _e('All comments', 'madmeg') ?></a></li>
						</ul>
					</li>
					<li id="meta">
						<h3><?php _e('Meta', 'madmeg') ?></h3>
						<ul>
							<?php wp_register() ?>
							<li><?php wp_loginout() ?></li>
							<?php wp_meta() ?>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>

	<?php if (is_active_sidebar('secondary-widget-area')) : ?>
		<div id="secondary" class="rounded drop-shadow">
			<div class="sidebar">
				<ul>
					<?php dynamic_sidebar('secondary-widget-area'); ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
</div>