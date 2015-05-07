<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

get_header();
?>

<div id="content" class="col620">

	<h2><?php _e('Error 404 - Not Found', 'my-tapestry'); ?></h2>
	<h3><?php _e('Try a search?', 'my-tapestry'); ?></h3>
	<div class="col460" style="margin-left:160px">
		<?php get_search_form(); ?>		
	</div>
	
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>