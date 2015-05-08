<?php get_header(); ?>
<?php get_sidebar(); ?>	
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<p><?php the_time(__('l jS M Y', 'my-tapestry')); ?> <?php _e('', 'my-tapestry'); ?></p>

<a href="http://twitter.com/share?text=<?php the_title(); ?>" target="_blank" class="WebSymbols">k</a>

<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" class="WebSymbols">f</a>

<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target = "_blank" class="WebSymbols">g</a>

<?php the_content(); ?>
<span class="categories">
<?php if ( count( get_the_category() ) ) : ?>
<?php printf( __( 'Categories: %2$s', 'sushi' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
<?php endif; ?>
</span>
</article>
<?php endwhile; ?>
<?php endif; ?>
<hr />
<?php comments_template( '', true ); ?>
</section>
<?php get_footer(); ?>