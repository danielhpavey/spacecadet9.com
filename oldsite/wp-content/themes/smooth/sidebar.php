<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */
?>
<div id="sidebar" class="col300 clear">

	<?php if (!dynamic_sidebar('Sidebar Top')) : ?>
		<div class="widget search">
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>

	<div class="col140">
		<?php if (!dynamic_sidebar('Sidebar Left')) : ?>
			<div class="widget categories">
				<h3><?php _e('Categories', 'my-tapestry'); ?></h3>
				<ul>
				<?php wp_list_categories('show_count=0&title_li='); ?>
				</ul>
			</div>
			<div class="widget archives">
				<h3><?php _e('Archives', 'my-tapestry'); ?></h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>

	<div class="col140 clear">
		<?php if (!dynamic_sidebar('Sidebar Right')) : ?>
			<div class="widget bookmarks">
				<ul>
					<?php wp_list_bookmarks('title_after=</h3>&title_before=<h3>'); ?>
				</ul>
			</div>
			<div class="widget meta">
				<h3><?php _e('Meta', 'my-tapestry'); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
			</div>
		<?php endif; ?>
    </div>

</div>
