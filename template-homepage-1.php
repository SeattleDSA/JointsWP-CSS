<?php 
/*
Template Name: Homepage - 1
*/

get_header(); ?>


	<div id="homepage-1" class="homepage-backdrop grid-x grid-margin-x"  style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo ''; } ?> '); background-size: cover;">

		<div class="homepage-feature-container small-12 medium-12 large-12">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<div class="small-12 medium-4 large-6 cell homepage-blankspace">
						&nbsp;
					</div>
					<div class="small-12 medium-8 large-6 cell homepage-feature">
						<!-- Homebar 2 -->
						<?php if ( is_active_sidebar( 'homefeature' ) ) : ?>
							<?php dynamic_sidebar( 'homefeature' ); ?>
						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
												
							<div class="alert help">
								<p><?php _e( 'Please activate Homepage Feature Widget.', 'jointswp' );  ?></p>
							</div>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="homepage-widgets small-12 medium-12 large-12">
			<div class="homebar-container grid-container">
					<div id="homebar" class="grid-x grid-margin-x grid-padding-x" role="complementary">
				
				<!-- Homebar 1 -->
				<?php if ( is_active_sidebar( 'homebar1' ) ) : ?>

					<div class="small-12 medium-4 large-4 cell homebar homebar1">
						<?php dynamic_sidebar( 'homebar1' ); ?>
					</div>

				<?php else : ?>

					<!-- This content shows up if there are no widgets defined in the backend. -->
										
					<div class="small-12 medium-4 large-4 cell homebar homebar1 alert help">
						<p><?php _e( 'Please activate Homebar 1 Widgets.', 'jointswp' );  ?></p>
					</div>

				<?php endif; ?>



				<!-- Homebar 2 -->
				<?php if ( is_active_sidebar( 'homebar2' ) ) : ?>
					<div class="small-12 medium-4 large-4 homebar homebar2 cell">
						<?php dynamic_sidebar( 'homebar2' ); ?>
					</div>
				<?php else : ?>

					<!-- This content shows up if there are no widgets defined in the backend. -->
										
					<div class="small-12 medium-4 large-4 cell homebar homebar2 alert help">
						<p><?php _e( 'Please activate Homebar 2 Widgets.', 'jointswp' );  ?></p>
					</div>

				<?php endif; ?>



				<!-- Homebar 3 -->
				<?php if ( is_active_sidebar( 'homebar3' ) ) : ?>

					<div class="small-12 medium-4 large-4 homebar homebar3 cell">
						<?php dynamic_sidebar( 'homebar3' ); ?>
					</div>

				<?php else : ?>

					<!-- This content shows up if there are no widgets defined in the backend. -->
										
					<div class="small-12 medium-4 large-4 homebar homebar3 cell alert help">
						<p><?php _e( 'Please activate Homebar 3 Widgets.', 'jointswp' );  ?></p>
					</div>

				<?php endif; ?>

			</div><!-- end #homebar -->
		</div>
		</div><!-- end .homepage-widgets -->
	</div> <!-- end #homepage-backdrop" -->

	<div class="content grid-container homepage1">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-12 medium-12 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<header class="article-header">
							<h1 class="page-title"><div class="grid-container"><?php the_title(); ?></div></h1>
					</header>
			    	<?php get_template_part( 'parts/loop', 'page-full' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>