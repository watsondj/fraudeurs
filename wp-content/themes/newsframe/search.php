<?php get_header(); ?>

<div class="row">
<div class="nine columns">

	<div id="search-page">
		<?php if (have_posts()) : ?>
			<header id="archive-header">
			<h1 class="archive-title">
			<?php printf( __( 'Search Results for: %s', 'newsframe' ), '<span>' . get_search_query() . '</span>' ); ?>
			</header>
				<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3 class="index-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?>
				</a>
				</h3>
	<section class="entry-meta">
		<small><?php _e('Posted On ' , 'newsframe' ); ?>
		<?php the_time('l, F jS, Y') ?> - <?php _e('Filed Under ' , 'newsframe'); ?><?php the_category(', ') ?>
		</small>
	</section><!-- .entry-meta -->

	<section class="entry-content">
		<div class="thumbnail">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}
			?>
		</div><!--End Thumbnail Section-->
	<?php the_excerpt(); ?>
	</section><!-- .entry-content -->
				</article>

<?php endwhile; ?>
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
