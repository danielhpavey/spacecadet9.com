<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

get_header(); ?>

<div id="content" class="col620">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div <?php post_class('post clear') ?> id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'my-tapestry'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    	<div class="col140 postInfos">
			<p><strong><?php the_time(__('d M Y', 'my-tapestry')); ?></strong> <?php _e('at', 'my-tapestry'); ?> <?php the_time(__('H:i', 'my-tapestry')); ?></p>
    		<?php edit_post_link(__('Edit', 'my-tapestry'), '<p>', '</p>'); ?>
    	</div>
    	<div class="col460 postContent clear">
    		<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="pagination"><span>'.__('Pages', 'my-tapestry').'</span> ', 'after' => '</p>', 'pagelink' => '<strong>%</strong>')); ?>
    	</div>
    </div>
    <?php endwhile; endif; ?>
	
	<?php comments_template(); ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>