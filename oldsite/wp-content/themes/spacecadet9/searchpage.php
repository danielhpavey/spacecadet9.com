<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>	
<section>
	<article>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php get_search_form(); ?>


<br />
<br />
<h2>Categories</h2>
 <?php 

$args = array(
        show_count=>1
        ,title_li =>''
        );

wp_list_categories( $args ); ?> 


	</article>
</section>
<?php get_footer(); ?>
