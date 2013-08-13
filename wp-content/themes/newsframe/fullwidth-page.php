<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div class="row">
<div class="twelve columns">

	<div id="full-page" role="main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?>>
		<h1 id="post-<?php the_ID(); ?>" class="page-title">
		<?php the_title(); ?>
		</h1>

	<article class="page-content">
	<?php the_content(); ?>
	</div>
	</article><!-- .page-content -->
<?php endwhile; ?>

<section id="commentbox">
	<?php comments_template( '', true ); ?>
</section>

<?php else : ?>
<h2 class="center"><?php _e('Nothing is Here - Page Not Found', 'newsframe'); ?></h2>
<div class="entry-content">
<p><?php _e( 'Sorry, but we couldn\'t find what you we\'re looking for.', 'newsframe' ); ?></p>
</div><!-- .entry-content -->
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
