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
			<section class="container-fluid my-0">
				<?php
				$directory = esc_url( get_stylesheet_directory_uri());
				$leftArrow = $directory . '/assets/icons/mmh_arrowLeft_white.svg';
				$rightArrow = $directory . '/assets/icons/mmh_arrowRight_white.svg';
				$leftPost = '<i><img class="arrow-left d-inline-block" src="' . $leftArrow . '"  height="16px"/></i> <strong>%link</strong>';
				$rightPost = '<strong>%link</strong><i><img class="arrow-left d-inline-block" src="' . $rightArrow . '"  height="16px"/></i>'
				?>
				<div class="container px-5">
					<div class="row py-3">
						<div class="col-6 text-left align-middle d-flex flex-row align-content-center other-articles">


							<?php previous_post_link( $leftPost ); ?>
						</div>
						<div class="col-6 text-right align-middle  d-flex flex-row align-content-center">
							<?php next_post_link( $rightPost ); ?>
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
