<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

get_header();
?>

<div id="content" class="col620">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class('clear') ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="col140 postInfos">
				<p><strong><?php the_time(__('d M Y', 'my-tapestry')); ?></strong> <?php _e('at', 'my-tapestry'); ?> <?php the_time(__('H:i', 'my-tapestry')); ?></p>
				<?php edit_post_link(__('Edit', 'my-tapestry'), '<p>', '</p>'); ?>
			</div>
			<div class="col460 postContent clear">
				<p><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image($post->ID, 'medium'); ?></a></p>
				<?php if (!empty($post->post_excerpt)) the_excerpt(); // this is the "caption" ?>
				<?php the_content(__('Continue reading', 'my-tapestry').' &rarr;'); ?>
			</div>
		</div>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no attachments matched your criteria.', 'my-tapestry'); ?></p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>