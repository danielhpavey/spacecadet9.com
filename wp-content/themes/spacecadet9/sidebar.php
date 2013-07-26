<?php
?>
<aside>
<ul id = "menu-menu">
<li><a href=<?php bloginfo('url'); ?>>Home</a></li>
<?php wp_list_pages('title_li='); ?></ul>
<ul class="widgets">
<?php if ( !dynamic_sidebar() ) : ?>
<?php endif; ?>
</ul>
</aside>
<?php



?>