<?php get_header(); ?>

	<?php if(is_front_page() && !is_paged()) { ?>
		<div class="row">
		<div class="twelve columns">
		<div id="featurednews">
		<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
		<?php while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$do_not_duplicate = $post->ID; ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1 class="latest-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?>
				</a>
				</h1>
					<section class="homesubtitle">
					<?php { $subtitle = get_post_meta
					($post->ID, 'subtitle', $single = true);
					if($subtitle !== '') echo $subtitle;} ?>
					</section><!-- .subtitle -->

				<div class="latest-image">
				<?php if ( has_post_thumbnail() ) {
				$img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
				the_post_thumbnail('large');
				$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
				}
				?>
				</div><!--end latest image Section-->

				<div class="latest-content">
				<?php the_excerpt(); ?>
				</div><!-- .latest-content -->
			</article>
		</div>
		<?php endwhile; ?>
	</div>
	</div>

<div class="row">
<div class="twelve columns">
	<?php $displayed = array();?>
	<?php $my_query = new WP_Query('posts_per_page=9');
 	while ($my_query->have_posts()) : $my_query->the_post();
	if( $post->ID == $do_not_duplicate ) continue; ?>

		<div class="homeitem six columns">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<h2 class="index-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
		<?php the_title(); ?>
		</a>
		</h2>

	<div class="home-excerpt">
	<?php echo newsframe_excerpt(30); ?>
	</div>
		</article>
</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

<section id="post-nav">
	<?php posts_nav_link(' ', '<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'); ?>
</section><!--End Navigation-->
</div>

<?php } ?>
<?php if(is_paged()) { ?>

<div class="row">
<div class="nine columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<h2 class="index-title">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
	</article>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php endif; ?>
<section id="post-nav" role="navigation">
	<?php posts_nav_link(' ', '<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'); ?>
</section><!--End Navigation-->
</div>

<?php get_sidebar(); ?>

</div>
<?php } ?>
</div>
<?php get_footer(); ?>