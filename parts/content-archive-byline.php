<?php
/**
 * The template part for displaying an author byline in the archive
 */
?>

<p class="byline">
	<?php the_author_posts_link(); ?><br>
	<?php the_time('F j, Y') ?><br>
	<?php the_category(', ') ?>
</p>	