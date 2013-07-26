<?php get_header(); ?>
<?php get_sidebar(); ?>	
<section>
	<?php if ( have_posts() ) : ?>

	<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
	<hr />
			<?php while ( have_posts() ) : the_post(); ?>
				<article class = "searchresults">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			<?php the_excerpt(); ?>
			<?php
   				if ( get_the_post_thumbnail($post_id) != '' ) {

				  echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
				   the_post_thumbnail();
				  echo '</a>';

				} else {
				 
				 echo catch_that_image();
				 

				}
				?>
<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Read More...</a>	
				</article>
		<?php endwhile; ?>

		<?php else : ?>

		<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>

		<?php endif; ?>
</section>
<?php get_footer(); ?>