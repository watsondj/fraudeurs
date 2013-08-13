<?php if (is_active_sidebar('header-widget-area')) : ?>
	<div id="header-widget-area">
		<div class="sidebar">
			<ul>
				<?php dynamic_sidebar('header-widget-area'); ?>
			</ul>
		</div>
	</div>
<?php endif; ?>