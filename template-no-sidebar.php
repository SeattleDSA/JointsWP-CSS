<?php 
/*
Template Name: Page (No Sidebar)
*/

get_header(); ?>
	
	<div class="content grid-container page-no-sidebar">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-12 medium-12 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<header class="article-header" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo ''; } ?> ')">
							<h1 class="page-title"><div class="grid-container"><?php the_title(); ?></div></h1>
					</header>
			    	<?php get_template_part( 'parts/loop', 'page-full' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>