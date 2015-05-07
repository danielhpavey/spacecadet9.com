<?php get_header(); ?>
<?php get_sidebar(); ?>	
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
</h2>
<?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>