<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="alert"><?php _e('This post is password protected. Enter the password to view comments.', 'my-tapestry'); ?></p>
	<?php
		return;
	}
?>

<h2 id="comments"><?php comments_number(__('No Comment', 'my-tapestry'), __('1 Comment', 'my-tapestry'), __('% Comments', 'my-tapestry'));?></h2>

<?php if ( have_comments() ) : ?>

    <ul id="commentlist">
    	<?php wp_list_comments(array('callback' => 'smooth_comment', 'style' => 'li')); ?>
    </ul>
 
	<div class="navComments clear">
		<div class="left"><?php previous_comments_link() ?></div>
		<div class="right"><?php next_comments_link() ?></div>
	</div>

<?php else : ?>

	<?php if ( comments_open() ) : ?><p class="nocomments"><?php _e("Be the first to respond!", 'my-tapestry'); ?></p><?php endif; ?>
    
<?php endif; ?>


<?php if ( comments_open() ) : ?>

	<div id="respond">
		<h2><?php _e('Leave a Reply', 'my-tapestry'); ?></h2>
		<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p><?php _e('You must be', 'my-tapestry'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in', 'my-tapestry'); ?></a> <?php _e('to post a comment', 'my-tapestry'); ?>.</p>
		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( is_user_logged_in() ) : ?>
					<p><?php _e('Logged in as', 'my-tapestry'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'my-tapestry'); ?>"><?php _e('Log out', 'my-tapestry'); ?> &raquo;</a></p>
				<?php else : ?>
			    	<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
			    	<label for="author"><?php _e('Name', 'my-tapestry'); ?> <?php if ($req) echo "<small>(".__('required', 'my-tapestry').")</small>"; ?></label></p>
			    	<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
			    	<label for="email"><?php _e('Mail', 'my-tapestry'); ?> <small>(<?php _e('will not be published', 'my-tapestry'); ?>)</small> <?php if ($req) echo "<small>(".__('required', 'my-tapestry').")</small>"; ?></label></p>
			    	<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
			    	<label for="url"><?php _e('Website', 'my-tapestry'); ?></label></p>
				<?php endif; ?>
							
				<p><textarea name="comment" id="comment" cols="52" rows="10" tabindex="4"></textarea></p>
				
				<?php if (function_exists(show_subscription_checkbox)) show_subscription_checkbox(); ?>
				
				<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'my-tapestry'); ?>" class="submit" />
				<?php comment_id_fields(); ?><?php do_action('comment_form', $post->ID); ?></p>
				
			</form>
		<?php endif; // If registration required and not logged in ?>
	</div>
<?php else : // comments are closed ?>

	<p class="nocomments"><?php _e('Comments are closed.', 'my-tapestry'); ?></p>
	
<?php endif; ?>