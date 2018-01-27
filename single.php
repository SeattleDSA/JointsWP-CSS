<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content grid-container">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

		<main class="main small-12 medium-8 large-8 cell" role="main">
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		</main> <!-- end #main -->

		<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
			<?php get_sidebar(); ?>
		</div>

		<?php endwhile; else : ?>
		
		   	<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>