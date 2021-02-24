<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MMH_Forensics
 */

get_header();
?>

	<main id="primary" class="site-main container-fluid">
		<div class="container py-5 mt-2 px-3">
			<div class="row px-2">
				<div class="col-9 offset-1">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>

			</div>
		</div>
	</main><!-- #main -->

<?php

get_footer();
