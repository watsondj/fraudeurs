<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content" class="wide">
			<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php madmeg_dates(); ?>
				<h2 class="page-title"><a href="<?php echo get_permalink($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></h2>
				<h3 class="entry-title"><?php madmeg_title(get_the_title()); ?></h3>
				<div class="entry-content">
					<div class="entry-caption">
						<div class="entry-attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>" title="<?php echo esc_html(get_the_title($post->ID), 1) ?>" rel="attachment"><?php echo wp_get_attachment_image($post->ID, 'large'); ?></a></div>
						<?php if (!empty($post->post_excerpt)) the_excerpt(); ?>
					</div>
					<?php if (!empty($post->post_content)) { the_content(__('Read More &raquo;', 'madmeg')); } ?>
				</div>
				<?php if (wp_attachment_is_image($post->ID)) { ?>
					<div id="nav-images" class="navigation">
						<div class="nav-previous"><?php previous_image_link(false, __('&laquo; Previous Image', 'madmeg')) ?></div>
						<div class="nav-next"><?php next_image_link(false, __('Next Image &raquo;', 'madmeg')) ?></div>
					</div>
				<?php } ?>
				<div class="entry-div">
					<?php printf(__('Bookmark the <a href="%1$s" title="Permalink to %2$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%3$s" title="Comments RSS to %2$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'madmeg'),
						get_permalink(),
						esc_html(get_the_title(), 'double'),
						get_post_comments_feed_link() ) ?>
				</div>
				<div class="entry-div">
					<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : ?>
						<?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'madmeg'), get_trackback_url()) ?>
					<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : ?>
						<?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'madmeg'), get_trackback_url()) ?>
					<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : ?>
						<?php printf(__('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'madmeg')) ?>
					<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : ?>
						<?php _e('Both comments and trackbacks are currently closed.', 'madmeg') ?>
					<?php endif; ?>
				</div>
				<?php edit_post_link(__('Edit', 'madmeg'), "<p class=\"edit-link\">", "</p>"); ?>
			</div>
			<?php comments_template(); ?>
		</div>
	</div>
</div>
<?php get_footer() ?>