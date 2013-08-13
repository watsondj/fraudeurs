<?php get_header() ?>
<div id="main">
	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php madmeg_dates(); ?>
				<h1 class="entry-title"><?php madmeg_title(get_the_title()); ?></h1>
				<div class="entry-author"><?php printf(__('by %s', 'madmeg'), '<a class="url fn n" href="'.get_author_posts_url($authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'madmeg'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></div>
				<div class="entry-content">
					<?php the_content(''.__('Read More &raquo;', 'madmeg').''); ?>
					<?php wp_link_pages('before=<div class="page-link">' .__('<span>Pages</span>', 'madmeg') . '&after=</div>&pagelink=<em>%</em>') ?>
				</div>
				<div class="entry-div">
					<?php madmeg_meta(); ?>
				</div>
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
			</div>
			<?php madmeg_navigation(); ?>
			<?php comments_template(); ?>
		</div>
	</div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>