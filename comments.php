<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MMH_Forensics
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

<div id="comments" class="comments-area container py-md-5">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$mmhf_comment_count = get_comments_number();
			if ( '1' === $mmhf_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'mmhf' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $mmhf_comment_count, 'comments title', 'mmhf' ) ),
					number_format_i18n( $mmhf_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="comment-list comments">
		    <?php
			wp_list_comments( array(
			    'style'      => 'ul',
			    'short_ping' => true,
		            'callback' => 'better_comments'
			) );
		     ?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mmhf' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	$comment_send = 'Send';
$comment_reply = 'Leave a Message';
$comment_reply_to = 'Reply';
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Share Your Thoughts';
$comment_url = 'Website (Optional)';
$comment_city = 'Location (Optional)';


$comment_before = 'Registration isn\'t required.';

$comment_cancel = 'Cancel Reply';
	$comments_args = array(
			'class_form' => 'row',
			'class_submit' => __( 'btn btn-primary' ),
			'cancel_reply_link'    => FALSE,
			'class_reply_to' => __( 'btn btn-primary'),

        // Change the title of send button
        'label_submit' => __( 'Reply', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Share Your Thoughts', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
				'comment_notes_before' => '',
        // Redefine your own textarea (the comment body).
        // 'comment_field' => '<div class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></div>',
				'comment_field' => '<div class="comment-form-comment col-12 my-1 "><textarea class="form-control" id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'" rows="6"></textarea></div>',
				'fields' => array(
					//Author field
					'author' => '<div class="comment-form-author col-6 my-1"><br /><input class="form-control" id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></div>',
					//Email Field
					'email' => '<div class="comment-form-email col-6 my-1"><br /><input class="form-control" id="email" name="email" placeholder="' . $comment_email .'"></input></div>',
					'city' => '<div class="comment-form-city col-6 my-1"><br /><input class="form-control" id="city" name="city" placeholder="' . $comment_city .'"></input></div>',
					//URL Field
					'url' => '<div class="comment-form-url col-6 my-1"><br /><input class="form-control" id="url" name="url" placeholder="' . $comment_url .'"></input></div>',

					)
);
comment_form( $comments_args );
	?>

</div><!-- #comments -->
