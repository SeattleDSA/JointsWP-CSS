<?php
/*
Template Name: Full Width (No Margin or Sidebar)
*/

get_header(); ?>
			
	<div class="content page-full-width">
	
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

		    					
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
						<header class="article-header" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo ''; } ?> ')">
							<h1 class="page-title"><div class="grid-container"><?php the_title(); ?></div></h1>
						</header> <!-- end article header -->

						<div class="grid-container">
							<?php get_template_part( 'parts/loop', 'page-full' ); ?>
						</div>
					</article> <!-- end article -->
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
