<?php
/**
 * @package WordPress
 * @subpackage Smooth
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie.css" media="screen" /><![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cufon.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/qlassik.font.js"></script>

		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	
	<body>
		
		<div id="nav">
			<div id="navContent" class="clear">
				<?php wp_page_menu(array('show_home' => '1')); ?>
			</div>
		</div>
		
		<div id="wrapper">
		
		<div id="header">
			<div class="left">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
