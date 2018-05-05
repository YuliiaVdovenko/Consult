<?php 
function change_comment_form($fields) {

    $fields['comment_notes_before'] = '';
    return $fields;
}

add_filter('comment_form_defaults','change_comment_form');


    function custom_comment ($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>"">
            <article class="d-flex pb-5">
                <div class="avatar d-block">
                    <?= get_avatar( $comment); ?>
                </div>
                <div class="comments-text">
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Your comment is awaiting moderation.') ?></em>
                    <?php endif; ?>
                    <h4 class="comment-author">
                        <a href="<?php comment_author_link($comment); ?>">
                            <?php
                            if ( $comment->user_id != '0' ) {
                                echo get_user_meta( $comment->user_id, 'nickname', true );
                            } else {
                                echo get_comment_author_link();
                            }
                            ?>
                        </a>
                        <?php
                        comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
                        ?>
                    </h4>
                    <p> <?= get_comment_text($comment);?></p>
                </div>
            </article>
        </li>
    <?php } ?>