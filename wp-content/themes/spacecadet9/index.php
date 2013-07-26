<?php get_header(); ?>
<?php get_sidebar(); ?>
<section>
<?php if (is_home()) {
		query_posts($query_string . '&cat=-412');
		} ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h2 class="entry-title">
<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?>
</a>
</h2>
<p><?php the_time(__('l jS M Y', 'my-tapestry')); ?> <?php _e('', 'my-tapestry'); ?>
</p>
<?php //the_content(); ?>
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
<span class="categories">
<?php if ( count( get_the_category() ) ) : ?>
<?php printf( __( 'Categories: %2$s', 'sushi' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
<?php endif; ?>
</span>
</article>
<?php endwhile; ?>
<?php endif; ?>
<div class = "pagithingy">
<?php $prev = get_previous_posts_link();
if ( strlen($prev) > 0){
echo $prev . ' &mdash; ';
}
?>

<?php next_posts_link(); ?>
</div>			
</section>
<?php get_footer(); ?>