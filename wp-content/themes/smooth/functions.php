<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

automatic_feed_links();

wp_enqueue_script('theme_functions', get_bloginfo('template_url').'/js/functions.js', array('jquery'));

load_theme_textdomain('my-tapestry', TEMPLATEPATH.'/lang/');

if ( function_exists('register_sidebar') ) {
 	register_sidebar(array(
 	'name' 			=> 'Sidebar Top',
 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
 	'after_widget'  => '</div>',
 	'before_title'  => '<h3 class="widgettitle">',
 	'after_title'	=> '</h3>'));
 	
 	register_sidebar(array(
 	'name' 			=> 'Sidebar Left',
 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
 	'after_widget'  => '</div>',
 	'before_title'  => '<h3 class="widgettitle">',
 	'after_title'	=> '</h3>'));
 	
 	register_sidebar(array(
 	'name' 			=> 'Sidebar Right',
 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
 	'after_widget'  => '</div>',
 	'before_title'  => '<h3 class="widgettitle">',
 	'after_title'	=> '</h3>'));
}

function smooth_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
   	<li class="clear" id="comment-<?php comment_ID() ?>">
    	<div <?php comment_class('clear'); ?>>
	   		<div class="col140">
	   			<?php comment_type('', '<p>'.__('Trackback', 'my-tapestry').'</p>', '<p>'.__('Pingback', 'my-tapestry').'</p>'); ?>
	   			<p><?php _e('by', 'my-tapestry'); ?> <strong><?php comment_author_link() ?></strong></p>
	   			<p><strong><?php comment_date(__('d M Y', 'my-tapestry')) ?></strong> <?php _e('at', 'my-tapestry'); ?> <a href="#comment-<?php comment_ID() ?>"><?php comment_time(__('H:i', 'my-tapestry')) ?></a></p>
	   			<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	   			<?php edit_comment_link(__("Edit", 'my-tapestry'), '<p>', '</p>'); ?>
	   		</div>
	   		
	   		<div class="col460 clear">
	       		<?php echo get_avatar( $comment, 50 ); ?>
	   			<?php if ($comment->comment_approved == '0') : ?>
	   				<p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
	   			<?php endif; ?>
	   			<?php comment_text() ?>
	   		</div>
   		</div>
<?php
}
?>

<?php
function wpr_snap($atts, $content = null) {
        extract(shortcode_atts(array(
			"snap" => 'http://s.wordpress.com/mshots/v1/',
			"url" => 'http://www.catswhocode.com',
			"alt" => 'My image',
			"w" => '400', // width
			"h" => '300' // height
        ), $atts));

	$img = '<img src="' . $snap . '' . urlencode($url) . '?w=' . $w . '&h=' . $h . '" alt="' . $alt . '"/>';
        return $img;
}

add_shortcode("snap", "wpr_snap");

?>

