<h3>Comments</h3>

<?php
    $args = array(
        'avatar_size' => 80,
        'max_depth'   => 5,
        'style'       => 'ol',
        'short_ping'  => true,
        'type'        => 'comment',
    );

    wp_list_comments($args, $comments);



$form_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Send', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" cols="45" rows="8" name="comment" aria-required="true"></textarea></p>',
);
comment_form( $form_args );

?>