<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MMH_Forensics
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );?>

			<section class="continer-fluid bg-offWhite" id="postNavigation">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="col-6 text-left">
								<?php previous_post_link( '<------- <strong>%link</strong>' ); ?>
							</div>
							<div class="col-6 text-right">
								<?php next_post_link( '<strong>%link</strong> ------->' ); ?>
							</div>
							<?php
							// if(! empty previous_post_link()):
							//
							// endif;

							// the_post_navigation(
							// 	array(
							// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mmhf' ) . '</span> <span class="nav-title">%title</span>',
							// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mmhf' ) . '</span> <span class="nav-title">%title</span>',
							// 	)
							// );
							?>
						</div>
					</div>

				</div>
				</div>
			</section>


			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			 if(comments_open() || get_comments_number()): ?>
			<section class="bg-primary container-fluid py-4 my-0">
				<div class="container my-3">
					<div class="row">
						<div class="col-8 offset-2">
							<!-- <h2>Comments</h2> -->
						 <?php comments_template(); ?>
						</div>


					</div>

				</div>

			</section>
		<?php endif; ?>


		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
