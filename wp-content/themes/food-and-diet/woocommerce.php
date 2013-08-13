<?php
/**
 * The template for displaying all pages.
 *
 * @package CodePeople
 * @subpackage Food_Diet
 * @since Food & Diet 1.0.1
 *
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<?php woocommerce_content(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
