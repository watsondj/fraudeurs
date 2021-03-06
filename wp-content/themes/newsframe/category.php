<?php get_header(); ?>
	<div class="row">
	<div class="nine columns">
		<div id="category-page">
		<?php if (have_posts()) : ?>
		<header id="archive-header">
		<h1 class="archive-title">
		<?php
		printf( __( '%s', 'newsframe' ), '<span>' . single_cat_title( '', false ) . '</span>' );
		?></h1>
		<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
		echo apply_filters( 'category_archive_meta',
		'<div class="cat-archive-meta">' . $category_description . '</div>' );
		?>
		</header>
	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?>>
			<h3 id="post-<?php the_ID(); ?>" class="index-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<?php the_title(); ?>
			</a>
			</h3>
				<div class="entry-content">
				<?php the_excerpt(); ?>
				</div>
				</div><!-- .entry-content -->
	<?php endwhile; ?>
<section id="post-nav" role="navigation">
<?php posts_nav_link(' ', '<i class="icon-arrow-left"></i>',
'<i class="icon-arrow-right"></i>'); ?>
</section><!--End Navigation-->
	<?php else : ?>
		<h2 class="center"><?php _e('Nothing is Here - Page Not Found', 'newsframe'); ?></h2>
		<div class="entry-content">
		<p><?php _e( 'Sorry, but we couldn\'t find what you we\'re looking for.', 'newsframe' ); ?></p>
		</div><!-- .entry-content -->
	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
