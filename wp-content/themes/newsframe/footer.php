<div class="row">
<div class="twelve columns">

	<footer id="mainfooter" role="contentinfo">
	<nav id="footermenu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'bottom-menu' ) ); ?></nav>
		<small>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> -
		<?php _e( '<a href="http://www.edwardrjenkins.com">Theme Designed by Edward R. Jenkins</a>' , 'newsframe' ); ?>
		</small>

	</footer><!--footer end-->
</div>
</div>
</div>

<?php wp_footer(); ?>

</body>

</html>
