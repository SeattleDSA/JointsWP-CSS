<?php
/**
 * The template part for displaying posts as cards
 *
 */

// Adjust the amount of rows in the grid
$grid_columns = 1; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x grid-margin-x grid-padding-x archive-card"> <!--Begin Grid--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="small-12 cell panel">
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x grid-margin-x'); ?> role="article">
			
				<section class="featured-image small-6 medium-4 large-3 cell" itemprop="articleBody">
					<a href="<?php the_permalink() ?>" class="archive-post-image" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
				</section> <!-- end article section -->
			
				<header class="article-header small-6 medium-8 large-9 cell">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
					<?php get_template_part( 'parts/content', 'archive-byline' ); ?>				
				</header> <!-- end article header -->	
								
				<!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

