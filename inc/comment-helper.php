<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?> ">
    <div class="comment my-5">


        <div class="d-flex mb-2">
          <div class="img-thumbnail d-none d-sm-block">
              <?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
          </div>


                  <div class="ps-4 d-flex flex-column comment-by">
                    <div class="comment-arrow"></div>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                            <br />
                        <?php endif; ?>
                      <strong><?php echo get_comment_author() ?></strong>
                      <span class="date text-left"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>
                      <div class="comment-reply-button float-left">
                          <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                      </div>

                  </div>



        </div>
        <div class="comment-block">

          <?php comment_text() ?>

        </div>
        </div>

<?php
        }
endif;
