<?php get_header(); ?>
	<div class="row">
	<div class="nine columns">
	<div id="author-page">
		<?php if ( have_posts() ) : ?>
		<?php the_post(); ?>
	<div class="author-wrap">
	<header class="author-page-header">
	<h1 class="author-title"><?php printf( __( 'About %s', 'newsframe' ), get_the_author() ); ?></h1>
	</header><!-- .author-page-header -->
	<?php rewind_posts(); ?>
	<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="author-box">
		<div id="author-photo">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'newsframe_author_bio_avatar_size', 96 ) ); ?>
		</div><!-- .author-photo-->
			<div class="author-description">
			<p><?php the_author_meta( 'description' ); ?></p>
			</div><!-- .author-description	-->
		</div><!-- .author-box--></div>

		<h2 class="author-post-header">
		<?php printf( __( 'Recent Articles', 'newsframe' ) ); ?>
		</h2>
		<?php endif; ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<h2 class="index-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
		</h2>
		<?php the_excerpt(); ?>
		</article>
	<?php endwhile; ?>

	<section id="post-nav" role="navigation">
		<?php posts_nav_link(' ', '<i class="icon-arrow-left"></i>',
		'<i class="icon-arrow-right"></i>'); ?>
	</section><!--End Navigation-->
	<?php else : ?>
	<h2 class="center">
	<?php _e('Nothing is Here - Page Not Found', 'newsframe'); ?>
	</h2>

	<div class="entry-content">
	<p><?php _e( 'Sorry, but we couldn\'t find what you we\'re looking for.', 'newsframe' ); ?></p>
	</div><!-- .entry-content -->
	<?php endif; ?>
	</div>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
