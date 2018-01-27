<?php
/**
 * Template part for displaying page content in template-full-width.php
 */
?>

    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
