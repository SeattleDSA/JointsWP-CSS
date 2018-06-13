<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<div class="post-categories"><?php the_category(' ') ?></div>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <div clas="social-sharing"> <a class="clear button">Share:</a> <a class="button" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!">Twitter</a> 
		<a class="button" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">Facebook</a>
		<a class="button" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink();?>" title="Share via Email.">Email</a>
		<?php the_post_thumbnail('large'); ?>
	</div>

    <section class="entry-content" itemprop="articleBody">
		<div class="post-caption"><?php the_post_thumbnail_caption(); ?></div>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>	
													
</article> <!-- end article -->