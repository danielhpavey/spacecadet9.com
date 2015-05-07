<?php
?>
<ul class="comments">
<?php wp_list_comments(  ); ?>
</ul>
<?php $comments_args = array(
        // change the title of send button 
        'title_reply'=>'<h4>Comment</h4>',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);
comment_form($comments_args); ?>
<?php
?>