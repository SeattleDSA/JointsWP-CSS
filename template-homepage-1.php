<?php 
/*
Template Name: Homepage - 1
*/

get_header(); ?>


	<div id="homepage-1" class="homepage-backdrop grid-x grid-margin-x">

		<style>.off-canvas-content { background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo '#fff'; } ?> '); background-size: cover;}</style>

		<div class="homepage-feature-container small-12 medium-12 large-12">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<div class="small-12 medium-6 large-8 cell homepage-hometitle">
						<?php if ( is_active_sidebar( 'hometitle' ) ) : ?>
							<?php dynamic_sidebar( 'hometitle' ); ?>
						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
												
							<div class="alert help">
								<p><?php _e( 'Please activate Homepage Title Widget.', 'jointswp' );  ?></p>
							</div>

						<?php endif; ?>
					</div>
					<div class="small-12 medium-6 large-4 cell homepage-feature">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<header class="article-header">
								<h1 class="page-title"><div class="grid-container"><?php the_title(); ?></div></h1>
							</header>
			    		<?php get_template_part( 'parts/loop', 'page-full' ); ?>
			    		<?php endwhile; endif; ?>	
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

<?php get_footer(); ?>