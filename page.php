<?php
/*
 * The template for displaying all pages.
 */

get_header(); ?>

<div class="wrapper">
	<div class="container">
	
		<div class="page-title">
			<h2><?php the_title(); ?></h2>
		</div>
	
		<div class="page-content">
            <?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php endwhile; ?>
		</div>
		
	</div><!--container-->
</div><!--wrapper-->

<?php get_footer(); ?>