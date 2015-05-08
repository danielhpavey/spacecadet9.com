<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

get_header(); ?>

<div id="content" class="col620">

	<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h2><?php _e('Archive for the', 'my-tapestry'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category', 'my-tapestry'); ?></h2>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h2><?php _e('Posts Tagged', 'my-tapestry'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2><?php _e('Archive for', 'my-tapestry'); ?> <?php the_time(__('F jS, Y', 'my-tapestry')); ?></h2>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2><?php _e('Archive for', 'my-tapestry'); ?> <?php the_time(__('F, Y', 'my-tapestry')); ?></h2>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2><?php _e('Archive for', 'my-tapestry'); ?> <?php the_time('Y'); ?></h2>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2><?php _e('Author Archive', 'my-tapestry'); ?></h2>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2><?php _e('Blog Archives', 'my-tapestry'); ?></h2>
	<?php } ?>

		<?php while (have_posts()) : the_post(); ?>
			
		<div <?php post_class('clear') ?> id="post-<?php the_ID(); ?>">
			<?php if(function_exists(getILikeThis)) getILikeThis('get'); ?>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'my-tapestry'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<div class="col140 postInfos">
				<p><strong><?php the_time(__('d M Y', 'my-tapestry')); ?></strong> <?php _e('at', 'my-tapestry'); ?> <?php the_time(__('H:i', 'my-tapestry')); ?></p>
				<p><strong><?php the_author() ?></strong></p>
				<p><?php the_category(', ') ?></p>
				<p><?php comments_popup_link(__('No Comment', 'my-tapestry'), __('1 Comment', 'my-tapestry'), __('% Comments', 'my-tapestry')); ?></p>
				<?php edit_post_link(__('Edit', 'my-tapestry'), '<p>', '</p>'); ?>
			</div>
			<div class="col460 postContent clear">
				<?php the_excerpt(); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<div class="navigation clear">
			<div class="left"><?php next_posts_link('&larr; '.__('Older Entries', 'my-tapestry')) ?></div>
			<div class="right"><?php previous_posts_link(__('Newer Entries', 'my-tapestry').' &rarr;') ?></div>
		</div>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf('<p>'.__("Sorry, but there aren't any posts in the %s category yet.", 'my-tapestry').'</p>', single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo('<p>'.__("Sorry, but there aren't any posts with this date.", 'my-tapestry').'</p>');
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf('<p>'.__("Sorry, but there aren't any posts by %s yet.", 'my-tapestry').'</p>', $userdata->display_name);
		} else {
			echo('<p>'.__('No posts found.', 'my-tapestry').'</p>');
		}
		get_search_form();

	endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>