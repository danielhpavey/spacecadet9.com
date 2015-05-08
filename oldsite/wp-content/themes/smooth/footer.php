<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */
?>
		</div>

		<div id="footer">
			<div id="footerContent" class="clear">
				<div class="left">
					<p><?php bloginfo('name'); ?> <?php _e('is proudly powered by', 'my-tapestry'); ?> <a href="http://wordpress.org/">WordPress</a>. Theme by <a href="http://www.benoitburgener.com">Beno&icirc;t &laquo;LeBen&raquo; Burgener</a> for <a href="http://www.my-tapestry.com">My Tapestry</a></p>
				</div>
				<div class="right">
					<p><a href="<?php bloginfo('rss2_url'); ?>">RSS &rarr; <?php _e('Entries', 'my-tapestry'); ?></a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">RSS &rarr; <?php _e('Comments', 'my-tapestry'); ?></a></p>
				</div>
			</div>
		</div>

		<?php wp_footer(); ?>
		
	</body>

</html>