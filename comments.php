<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package understrap
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area col-12 col-md-7 col-lg-8" id="comments">

	<?php if ( have_comments() ) : ?>

		<h2 class="section-title">
			
			<?php
				$comments_number = get_comments_number();
					printf(
						esc_html( _nx(
							'Visitor', 
							'Visitors',
							$comments_number,
							'comments title',
							'understrap'
						) ),
						number_format_i18n( $comments_number ),
						'<span>' . get_the_title() . '</span>'
					);
			?>
			<span class="section-subtitle">
				<?php
				$comments_number = get_comments_number();
					printf(
						esc_html( _nx(
							'Comment', 
							'Comments',
							$comments_number,
							'comments title',
							'understrap'
						) ),
						number_format_i18n( $comments_number ),
						'<span>' . get_the_title() . '</span>'
					);
			?>

		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>
			
			<nav class="comment-navigation" id="comment-nav-above">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
					'understrap' ) ); ?></div>
				<?php }
					if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
					'understrap' ) ); ?></div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // check for comment navigation. ?>

			<!--меняем ol на ul-->
		<ul class="comment-list">

			<?php
			wp_list_comments( array(
					//дописываем параметры для списка комментариев
                'type' => 'comment',
                'callback' => 'custom_comment',
                //эти параметры уже были
				'style'      => 'ul',
				'short_ping' => true,
                //дописываем параметры для списка комментариев
                'avatar_size' => '100',
                'reply_text' => 'reply' //способ ответа на комментарий, может быть реплай, ансвер и т.д.
			) );
			?>

		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>
			
			<nav class="comment-navigation" id="comment-nav-below">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
					'understrap' ) ); ?></div>
				<?php }
					if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
					'understrap' ) ); ?></div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->
			
		<?php endif; // check for comment navigation. ?>

	<?php endif; // endif have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'understrap' ); ?></p>

	<?php endif; ?>

	<?php comment_form(); // Render comments form. ?>

</div><!-- #comments -->
