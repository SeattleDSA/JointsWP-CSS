<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>" class="top-bar-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dsa-rose-mark.svg" class="top-bar-logo" /></a></li>
			<li><a href="<?php echo home_url(); ?>" class="top-bar-site-name"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>